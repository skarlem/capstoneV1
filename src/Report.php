<?php
namespace MyApp;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
include '../app/webservice/emergency.php';

//RATCHET LISTENER CLASS
class Report implements MessageComponentInterface {

    protected $clients;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
        echo "Server Started...";
    }

    public function onOpen(ConnectionInterface $conn) {
        // Store the new connection to send messages to later
        $this->clients->attach($conn);

        echo "New connection! ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {

        echo $msg."\n";
        $data = json_decode($msg, true);

        if($data['type']  == "emergency"){
            if (!isDuplicate($data['location']['lat'], $data['location']['long'], $data['user_details']['id_num'])) {
            
                switch ($data['type']) {
                    case 'emergency':
                        #Save emergency report to db
                        $emergency = new \Emergency;
                        $e_id = $emergency->generateEmergencyId();

                        $emergency->setId($e_id);
                        $emergency->setFullname($data['user_details']['fullname']);
                        $emergency->setReporterId($data['user_details']['id_num']);
                        $emergency->setLat($data['location']['lat']);
                        $emergency->setLng($data['location']['long']);
                        $emergency->setContactNo($data['user_details']['contact_no']);
                        $emergency->setGender($data['user_details']['gender']);
                        $emergency->setReportStatus('3');
                        date_default_timezone_set("Asia/Shanghai");
                        $emergency->setDate(date("Y/m/d H:i:s"));

                        if($data['message']['has_message']){
                            $emergency->setImage($data['message']['image']);
                            $emergency->setDetails($data['message']['message']);
                        }


                        $emergency->save();
                        $data['emergency_id'] = [$emergency->getId()];
                        $_msg = json_encode($data);

                        foreach ($this->clients as $client) {
                            if ($from !== $client) {
                                $client->send($_msg);
                            }
                        }
                        break;

                    default:
                        # code...
                        foreach ($this->clients as $client) {
                            if ($from !== $client) {
                                $client->send($msg);
                            }
                        }
                        break;
                }
            }

            else{
                foreach ($this->clients as $client) {
                    if ($from !== $client) {
                        $client->send("{\"message\":\"duplicate\"}");
                }
                }
            }//end else
        }
        else{
            foreach ($this->clients as $client) {
                if ($from !== $client) {
                    $client->send($msg);
                }
            }
        }
        

       // $numRecv = count($this->clients) - 1;
        //echo sprintf('Connection %d sending message "%s" to %d other connection%s' . "\n"
        //    , $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');
    }

    public function onClose(ConnectionInterface $conn) {
        // The connection is closed, remove it, as we can no longer send it messages
        $this->clients->detach($conn);

        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }
}


function isDuplicate($lat, $lng, $id){
        include '../app/webservice/connection.php';
        $query = 'SELECT * FROM crime_db.emergency_report WHERE lat = \''.$lat.'\' AND lng = \''.$lng.'\' AND reporter_id = \''.$id.'\' AND e_report_status = 3';
        $result = pg_query($conn, $query);
        if (pg_num_rows($result) == 0) {
            pg_close($conn);
            return false;
        }
        else{
            pg_close($conn);
            return true;
        }
    }