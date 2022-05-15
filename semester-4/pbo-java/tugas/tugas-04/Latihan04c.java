import java.util.Scanner;

public class Latihan04c{
	public static void main(String[] args){
		String snama, sprodi, snilai;
		Scanner keyboard = new Scanner(System.in);
		
		System.out.println("Data Test");
		System.out.println("=============================================");
		System.out.print("Nama          :");
		snama = keyboard.nextLine();
		System.out.print("Prodi         :");
		sprodi = keyboard.nextLine();
		System.out.print("Nilai         :");
		snilai = keyboard.nextLine();
		
		//mengubah String ke Int...
		int nilai = Integer.parseInt(snilai);
		
		//menghitung Nilai Huruf...
		if(nilai >= 85 && nilai <=100)
		{
			System.out.println("Nilai Huruf   :A");
		}
		else if(nilai >= 70 && nilai <85)
		{
			System.out.println("Nilai Huruf   :B");
		}
		else if(nilai >= 60 && nilai <70)
		{
			System.out.println("Nilai Huruf   :C");
		}
		else if(nilai >= 50 && nilai <60)
		{
			System.out.println("Nilai Huruf   :D");
		}
		else if(nilai >= 0 && nilai <50)
		{
			System.out.println("Nilai Huruf   :E");
		}
		System.out.println("=============================================");
	}
}