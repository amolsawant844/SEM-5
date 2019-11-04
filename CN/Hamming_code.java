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
import java.io.*;
public class Hamming_code 
{
    public static void main(String[] args) 
    {
        Scanner sc=new Scanner(System.in);
        System.out.println("Enter your data");
        int c1=0,c2=0,c4=0,c8=0;
        int ed[]=new int[7];
        for(int i=0;i<7;i++)
        {
            System.out.println("enter your bit:");
            ed[i]=sc.nextInt();
        }
        int nd[]=new int[11];
        int k=0;
        for(int i=10;i>=0;i--)
        {
            if(i!=7 && i!=3 && i!=1 && i!=0 )
            {
                nd[i]=ed[k];
                k=k+1;
            }
        }    
        for(int i=0;i<11;i++)
        {
            //for r1
            if(i%2==0)
            {
                if(nd[i]==1)
                    c1++;
            }
            //for r2
            if(i==1 || i==2 || i==5 || i==6 || i==9 || i==10)
            {
                if(nd[i]==1)
                    c2++;
            }
            //for r4
            if(i>=3 && i<=6)
            {
                if(nd[i]==1)
                    c4++;
            }
            if(i>=7 && i<=10)
            {
                if(nd[i]==1)
                    c8++;
            }
            
            
        }
        nd[0]=setbit(c1);
        nd[1]=setbit(c2);
        nd[3]=setbit(c4);
        nd[7]=setbit(c8);
        
        System.out.println("Hamming code is:");
        for(int i=10;i>=0;i--)
        {
            System.out.print(nd[i]+" ");
        }
        
        int rd[]=new int[11];
        System.out.println("Enter your recieved data");
        for(int i=0;i<11;i++)
        {
            System.out.println("enter your bit:");
            rd[i]=sc.nextInt();
        }
        int i=10;
        for(int j=0;j<11;j++)
        {
            if(rd[j]!=nd[i--])
            {
                System.out.println("error at "+(i+2));
                if(rd[j]==0)
                    rd[j]=1;
                else if(rd[j]==1)
                        rd[j]=0;
                break;
            }
        }
        System.out.println("correct code:");
        for (i=0;i<11;i++)
        {
            System.out.println(rd[i]+" ");
        }
        
    }
    public static int setbit(int c)
    {
        if(c%2==0)
            return 0;
        else 
            return 1;
    }
    
}
