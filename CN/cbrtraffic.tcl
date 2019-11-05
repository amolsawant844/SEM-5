set ns [new simulator]


$ns color 1 Blue
$ns color 2 Red

set nf [open out.nam w]
$ns nametrace-all $nf

proc finish{}
{
	global ns nf
	$ns flush-trace
	close $nf
	exec nam.out &
	exit 0
}

set n0 [$ns node]
set n1 [$ns node]
set n2 [$ns node]
set n3 [$ns node]

$ns duplex-link $n0$n2 1Mb 10ms DropTail
$ns duplex-link $n1$n2 1Mb 10ms DropTail
$ns duplex-link $n2$n3 1Mb 10ms DropTail

$ns duplex-link-op $n0 $n2 orient right-up
$ns duplex-link-op $n1 $n2 orient right-down
$ns duplex-link-op $n2 $n3 orient right

#so the next step is to send some data from node n0 to node n1. In ns, data is always being sent from one 'agent' to another.
#So the next step is to create an agent object that sends data from node n0, and another agent object that receives the data on node n1. 

#Create a UDP agent and attach it to node n0
set udp0 [new Agent/UDP]
$ns attach-agent $n0 $udp0

# Create a CBR traffic source and attach it to udp0
set cbr0 [new Application/Traffic/CBR]
$cbr0 set packetsize_ 500
$cbr0 set interval_ 0.005
$cbr0 attach-agent $udp0

# The packetSize is being set to 500 bytes and a packet will be sent every 0.005 seconds (i.e. 200 packets per second). 

set udp1 [new Agent/UDP]
$ns attach-agent $n1 $udp1

set cbr1 [new Application/Traffic/CBR]
$cbr1 set packetsize_ 500
$cbr1 set interval_ 0.005
$cbr1 attach-agent $udp1


#The next lines create a Null agent which acts as traffic sink and attach it to node n3.
set null0 [new Agent/Null]
$ns attach-agent $n3 $null0


#Now the two agents have to be connected with each other.
$ns connect $udp0 $null0
$ns connect $udp1 $null0

#tell the CBR agent when to send data and when to stop sending. 
$ns at 0.5 "$cbr0 start"
$ns at 1.0 "$cbr1 start"
$ns at 4.0 "$cbr0 stop"
$ns at 4.5 "$cbr1 stop"


$ns at 5.0 "finish"
$ns run