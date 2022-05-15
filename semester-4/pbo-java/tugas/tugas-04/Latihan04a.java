import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Latihan04a{
	public static void main(String[] args)throws IOException{
		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		String snama, sgaji, sanak;
		int tunjAnak, total;
		
		//input manual
		System.out.println("Hitung Tunj. anak");
		System.out.println("=============================");
		
		System.out.print("Nama      : ");
		snama = br.readLine();
		
		System.out.print("Anak      : ");
		sanak = br.readLine();
		
		System.out.print("Gaji      : ");
		sgaji = br.readLine();
		
		//mengubah String ke Int...
		int gaji = Integer.parseInt(sgaji);
		int anak = Integer.parseInt(sanak);
		
		//hitung tunjangan...
		if (anak > 3)
			tunjAnak = 3 * 200000;
		else
			tunjAnak = anak * 200000;
			
		total = gaji + tunjAnak;
		
		System.out.println("Tunj Anak : " + tunjAnak);
		System.out.println("Total     : " + total);
	}
}