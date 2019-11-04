package computernetworks;
import java.util.*;

class dijkstras
{
    public static void main(String[] args)
    {
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter no. Nodes");
        int n = sc.nextInt();
        int mat[][] = new int[n][n];
        System.out.println("Enter Adjacency");
        for(int i=0;i<n;i++)
        {
            for(int j=0;j<n;j++)
            {
                mat[i][j]=sc.nextInt();
            }
        }
        System.out.println("The Matrix is:");
        for(int i=0;i<n;i++)
        {
            for(int j=0;j<n;j++)
            {
                System.out.print(mat[i][j]+"\t");
            }
            System.out.println();
        }
        System.out.println("Enter Start Node");
        int s = sc.nextInt();
        System.out.println();
        int d[] = new int [n];//distance
        int p[] = new int [n];//predeccesor
	//initialization
        for(int i=0;i<n;i++)
        {
            d[i]=999;
            p[i]=-1;
        }
        d[s]=0;
        for(int i=0;i<n;i++)
        {
            if(d[i]>(d[s]+mat[s][i]) && mat[s][i]!=0 )
            {
                d[i]=d[s]+mat[s][i];
                p[i]=s;
            }
        }

        for(int i=0;i<n;i++)
        {
            for(int j=0;j<n;j++)
            {
                if(d[i]>(d[j]+mat[j][i])&& mat[j][i]!=0)
                {
                    d[i]=d[j]+mat[j][i];
                    p[i]=j;
                }
            }
        }

        System.out.println("\nPrinting Path");
        for(int i=0;i<n;i++)
        {
            if(i!=s)
            {
                System.out.print("\nPath from "+s+" to "+i+" is: "+i+"<--");

                int l=i,h;
                while(p[l]!=s)
                {
                    h=p[l];
                    if(h!=-1)
                    {
                        System.out.print(h+"<--");
                        l=h;
                    }
                    else
                    {
                        System.out.println("  No Path Exists  ");
                        break;
                    }
                }
                System.out.print(s);
                System.out.println(" : "+d[i]);

            }
        }
        System.out.println();
    }


}
