<?php 
    error_reporting(E_ALL);
    // Minecraft Includes
    require __DIR__ . '/src/Minecraft/MinecraftPing.php';
    require __DIR__ . '/src/Minecraft/MinecraftPingException.php';
    use xPaw\MinecraftPing;
    use xPaw\MinecraftPingException;

    // Quake + Includes
    require_once 'src/gameq/GameQ.php';

    function GetMCStatus($ServerIP, $ServerPort)
    {
        try
        {
            $Query = new MinecraftPing($ServerIP, $ServerPort);
            //print_r( $Query->Query() );
            $MCQuery = $Query->Query();
            $Return = "Online " . $MCQuery[players][online] . "/" . $MCQuery[players][max];
        }
        catch( MinecraftPingException $e )
        {
            //echo $e->getMessage();
            $Return = "Offline";
        }
        finally
        {
            if( $Query )
            {
                $Query->Close();
            }
        }

        return $Return;
    }

    function GetQ3Status($ServerIP, $ServerPort)
    {
        // Define your servers,
        // see list.php for all supported games and identifiers.
        $servers = array(
            'server 1' => array('quake3', $ServerIP)
        );

        // Call the class, and add your servers.
        $gq = new GameQ();
        $gq->addServers($servers);

        // You can optionally specify some settings
        $gq->setOption('timeout', 200);

        // You can optionally specify some output filters,
        // these will be applied to the results obtained.
        $gq->setFilter('normalise');
        $gq->setFilter('sortplayers', 'gq_ping');

        // Send requests, and parse the data
        $results = $gq->requestData();

        if (!$results['server 1']['gq_online']) {
            return "Offline";
        }

        return "Online " . $results['server 1']['g_humanplayers'] . "/" . $results['server 1']['gq_maxplayers'];
    }

    function GetServerStatus()
    {
        $SrvStatus[] = GetMCStatus('bdjesiea.fr', 25566);
        $SrvStatus[] = GetMCStatus('vanilla.bdjesiea.fr', 666);
        $SrvStatus[] = GetQ3Status('bdjesiea.fr', 27960);
        $SrvStatus[] = "Online";
        $SrvStatus[] = "On demand";

        return $SrvStatus;
    }
?>
