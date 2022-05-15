public class Latihan03f{
	public static void main(String abcd[]){
		int a = 8;
		int b = 10;
		
		System.out.println("Nilai a    : " + ( a ));
		//menampilkan nilai a
		
		System.out.println("Nilai b    : " + ( b ));
		//menampilkan nilai b
		
		System.out.println("a++        : " + ( a++ ));
		//melakukan increment postfix yang dimana nilai a ditampilkan terlebih dahulu
		//dan setelah itu di baris program selanjutnya nilai a sudah ditambah dengan 1
		
		System.out.println("++b        : " + ( ++b ));
		//melakukan increment prefix yang dimana nilai b dihitung terlebih dahulu dan setelah itu langsung ditampilkan di tempat
		
		System.out.println("a++ + ++a  : " + ( a++ + ++a ));
		//melakukan penjumlahan increment postfix kepada variabel a dan melakukan increment prefix variebel a
		//yang dimana nilai dari a++ + ++a = 9 + 11 = 20
		
		System.out.println("b++ + b++  : " + ( b++ + b++ ));
		//melakukan penjumlahan increment postfix variabel b, yang dimana nilai dari b++ + b++ = 11 + 12 = 23
		
		System.out.println("\n=============================");
		System.out.println("Program : Latihan03f");
		System.out.println("NIM     : A12.2020.06496");
		System.out.println("Nama    : Diffa Azkhani");
	}
}