 

package computernetworks;
import java.io.*;
public class Ipv4 {

    public static void main(String[] args)throws IOException
    {
       BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
       System.out.println("pleae enter the hex dump\n");
       
       String dump=br.readLine();
       
       String ipver=dump.substring(0,1);
       String header=dump.substring(1,2);
       String tos=dump.substring(2,4);
       String totl=dump.substring(4,8);
       String identification=dump.substring(8,12);
       String frag=dump.substring(12,16);
       String ttl=dump.substring(16,18);
       String p=dump.substring(18,20);
       String hchecksum=dump.substring(20,24);
       String sa=dump.substring(24,32);
       String da=dump.substring(32,40);
       
       //ipver
       if(ipver.equals("4"))
       {
           System.out.println("IP version : 4");
       }
       if(ipver.equals("6"))
       {
           System.out.println("IP version : 6");
       }
       
       //header
       System.out.println("Header Length :" + (4*Integer.parseInt(header,16)));
       
       //type of service
       String tos_bin=Integer.toBinaryString(Integer.parseInt(tos,16));
       while(tos_bin.length()<8)
           tos_bin="0"+tos_bin;
       System.out.println("Service type:"+ Integer.parseInt(tos_bin.substring(0,3),2));
       if(tos_bin.charAt(3)=='1')
       {
           System.out.println("Minimized delay requested");
       }
       if(tos_bin.charAt(4)=='1')
       {
           System.out.println("Maximized throughput requested");
       }
       if(tos_bin.charAt(5)=='1')
       {
           System.out.println("Maximized reliability requested");
       }
       if(tos_bin.charAt(6)=='1')
       {
           System.out.println("Minimized cost requested");
       }
       
       //total length
       System.out.println("Total length:" + Integer.parseInt(totl,16)+"bytes");
        
       //identification
       System.out.println("Identification:"+Integer.parseInt(identification,16));
       
       //fragments
       String frag_bin=Integer.toBinaryString(Integer.parseInt(frag,16));
       while(frag_bin.length()<16)
           frag_bin="0"+frag_bin;
       String frag_flags=frag_bin.substring(0,3);
       if(frag_flags.charAt(1)=='1')
       {
           System.out.println("do no fragment packet");
       }
       else
            System.out.println("Can be Fragmented");
       if(frag_flags.charAt(2) == '1')
            System.out.println("More Fragments pending");
       else
            System.out.println("No more Fragments pending");
       
       System.out.println("Fragmentation offset:" +((8*Integer.parseInt(frag_bin.substring(3,16),2))-(4*Integer.parseInt(header,16))));
       
       //time to live
       System.out.println("Time to live:"+Integer.parseInt(ttl,16)+"hops");
       
       //protocol
       System.out.println("protocol: ");
       if(Integer.parseInt(p,16)==1)
            System.out.println("ICMP");
       if(Integer.parseInt(p,16) == 2)
            System.out.println("IGMP");
       if(Integer.parseInt(p,16) == 89)
            System.out.println("OSPF");
       if(Integer.parseInt(p,16) == 6)
            System.out.println("TCP");
       if(Integer.parseInt(p,16) == 17)
            System.out.println("UDP");
       
       
       
       //header checksum
        System.out.println("Header checksum:"+Integer.parseInt(hchecksum,16));
        
        //source address
        String sa_bin=Long.toBinaryString(Long.parseLong(sa,16));
        while(sa_bin.length()<32)
            sa_bin="0"+sa_bin;
        System.out.println("Source Address:");
        System.out.print(Integer.parseInt(sa_bin.substring(0,8),2)+".");
        System.out.print(Integer.parseInt(sa_bin.substring(8,16),2)+".");
        System.out.print(Integer.parseInt(sa_bin.substring(16,24),2)+".");
        System.out.print(Integer.parseInt(sa_bin.substring(24,32),2));
        
        //destination address
        String da_bin=Long.toBinaryString(Long.parseLong(da,16));
        while(da_bin.length()<32)
            da_bin="0"+da_bin;
        System.out.println("\nDestination Address:");
        System.out.print(Integer.parseInt(da_bin.substring(0,8),2)+".");
        System.out.print(Integer.parseInt(da_bin.substring(8,16),2)+".");
        System.out.print(Integer.parseInt(da_bin.substring(16,24),2)+".");
        System.out.print(Integer.parseInt(da_bin.substring(24,32),2));
    }
    
}
