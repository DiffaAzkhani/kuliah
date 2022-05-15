public class Latihan03e{
	public static void main (String abcd[]){
		int a = 8;
		int b = 20;
		
		System.out.println("Nilai a     : " + ( a ));
		//menampilkan nilai awal a
		
		System.out.println("Nilai b     : " + ( b ));
		//menampilkan nilai awal b
		
		System.out.println("Nilai a>>1  : " + ( a>>1 ));
		//melakukan right shift operator pada nilai variabel a satu geseran dengan menghitung nilai biner
		//yang dimana nilai biner dari 8 yaitu 0000 1000, dan setelah digeser satu kali ke kanan akan menjadi 0000 0100 yang dimana nilai biner ini bernilai 4
		
		System.out.println("Nilai a>>2  : " + ( a>>2 ));
		//melakukan right shift operator pada nilai variabel a dua geseran dengan menghitung nilai biner
		//yang dimana nilai biner dari 8 yaitu 0000 1000, dan setelah digeser dua kali ke kanan akan menjadi 0000 0010 yang dimana nilai biner ini bernilai 2
		
		System.out.println("Nilai b<<1  : " + ( b<<1 ));
		//melakukan left shift operator pada nilai variabel a satu geseran dengan menghitung nilai biner
		//yang dimana nilai biner dari 20 yaitu 0001 0100, dan setelah digeser satu kali ke kiri akan menjadi 101000 yang dimana nilai biner ini bernilai 40
		
		System.out.println("Nilai b<<2  : " + ( b<<2 ));
		//melakukan left shift operator pada nilai variabel a dua geseran dengan menghitung nilai biner
		//yang dimana nilai biner dari 20 yaitu 0001 0100, dan setelah digeser dua kali ke kiri akan menjadi 1010000 yang dimana nilai biner ini bernilai 80
		
		System.out.println("\n=============================");
		System.out.println("Program : Latihan03e");
		System.out.println("NIM     : A12.2020.06496");
		System.out.println("Nama    : Diffa Azkhani");
	}
}