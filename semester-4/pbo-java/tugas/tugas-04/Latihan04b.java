import java.util.Scanner;

public class Latihan04b{
	public static void main(String[] args){
		String snama, sbulan;
		int a=1, anak, gaji, penjualan;
		double bonus, total=0, terima;
		
		Scanner oscan01 = new Scanner(System.in);
		
		System.out.println("Hitung Total Penjualan");
		System.out.println("====================================");
		System.out.print("Nama          : ");
		snama = oscan01.nextLine();
		System.out.print("Bulan         : ");
		sbulan = oscan01.nextLine();
		
		//menghitung total penjualan...
		System.out.println("\nTotal Penjualan");
		while(a<5)
		{
			System.out.print("Minggu ke-" + a + " : ");
			penjualan = oscan01.nextInt();
			total += penjualan;
			a++;
		}
		
		//Hitung Bonus...
		if(total > 5000000)
			bonus = 0.1 * total;
		else
			bonus = 0.05 * total;
		
		terima = total + bonus;
		System.out.println("====================================");
		System.out.println("Total       : " + total);
		System.out.println("Bonus       : " + bonus);
		System.out.println("Terima      : " + terima);
	}
}