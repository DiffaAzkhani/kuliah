import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Latihan04d{
	public static void main(String[] args)throws IOException{
		String snama, spelanggan, sair;
		int a=0,b=0,c=0,biaya=0;
		
		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		
		System.out.println("Perhitungan Biaya Pemakaian Air");
		System.out.println("===========================================");
		System.out.print("Nama          :");
		snama = br.readLine();
		System.out.print("No. Pelanggan :");
		spelanggan = br.readLine();
		System.out.print("Pemakaian Air :");
		sair = br.readLine();
		
		//mengubah string ke int...
		int air = Integer.parseInt(sair);
		
		//menghitung Biaya pakai...
		if (air <= 10)
		{
			biaya = air * 1000;
		}
		else if(air <= 20)
		{
			biaya = (air - 10) * 2000 + 10000;
		}
		else if(air > 20)
		{
			biaya = (air - 20) * 5000 + 30000;
		}
		
		System.out.println("Biaya Pakai   :" + biaya);
	}
}