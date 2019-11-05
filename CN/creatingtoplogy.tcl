
# create a simulator object.
set ns [new simulator]

#open a file for writing that is going to be used for the nam trace data.
set nf[open out.nam w]
$ns nametrace-all $nf

#creating a fucntion closes the trace file and starts nam.


proc finish{}
{
	global ns nf
	$ns flush-trace
	close $nf
	exec nam.out &
	exit 0
}


# creating all nodes
for{set i 0} { $i < 7} { incr i}
{
	set n($i)[$ns node]
}

#creating a link between the nodes
for{set i 0} { $i < 7} { incr i}
{
	$ns duplex-link $n($i)$n([expr($i+1)%7]) 1Mb 10ms DropTail
}


# execute the 'finish' procedure after 5.0 seconds of simulation time.
$ns at 5.0 "finish"

$ns run