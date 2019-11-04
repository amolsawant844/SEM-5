/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package computernetworks;

/**
 *
 * @author amol
 */
import java.util.*;

class Gobackn{

    public static void main(String[] args)
    {
        System.out.print("Enter No. of Bits in the Sequence Number: ");
        Scanner sc= new Scanner(System.in);
        int k1 = sc.nextInt();
        
        int size =((int)Math.pow(2,k1))-1;
        int a[] = new int[size];

        System.out.println("Max Window Size: "+size);
        int c=0;
        int k=0;

        while(k<size)
        {
        System.out.println("-----------");
        
        System.out.println("Sender");
        System.out.println("-----------");
        System.out.println("Frames Transmitted :");
        for(int i=c;i<size;i++)
        {
            System.out.print(i+"\t");
        }
        System.out.println("\n-----------");
        System.out.println("Receiver");
        System.out.println("-----------");
        System.out.println("Frames Received (1-Yes, 0-No)");
        for(int i=c;i<size;i++)
        {
            System.out.println("Frame "+i);
            a[i]=sc.nextInt();
        }
        System.out.println("-----------");
        System.out.println("Sender");
        System.out.println("-----------");
        
        for(k=c;k<size;k++)
        {
            if(a[k]==1)
            {
                System.out.println("Frame "+k+" is Acknowledged");
                
            }
            else
            {
                System.out.println("Frame "+k+" is Not Acknowledged/ Lost");
                c=k;
                for(int j=k+1;j<size;j++)
                {
                    System.out.println("Frame "+j+" is Discarded");

                }
                break;
            

            }

        }

    }

    }
}