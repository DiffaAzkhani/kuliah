public class Latihan03c {
	public static void main(String abcd[]){
		int x = 9;
		int y = 3;
		System.out.println("1. " + (x > 3 && x < 10));
		//Logical operator and ini akan menghasilkan nilai true karena dari kedua statement bernilai benar dari x > 3 dan juga x < 10
		
		System.out.println("2. " + (x > 3 && x > 10));
		//Logical operator and ini akan menghasilkan nilai false karena salah satu dari dua statement bernilai salah yaitu x > 10, padahal nilai x = 9
		
		System.out.println("3. " + (x < 3 || x < 10));
		//Logical operator or ini akan menghasilkan nilai true karena salah satu dari dua statement bernilai benar yaitu x < 10
		
		System.out.println("4. " + (x < 3 || x > 10));
		//Logical operator or ini akan menghasilkan nilai false karena dari kedua statement bernilai salah yaitu x < 3 dan juga x > 10, padahal nilai x = 9
		
		System.out.println("5. " + (x++ > 9 && y+1 > 4));
		//Logical operator and ini akan menghasilkan nilai false karena dari kedua statement bernilai salah dari x++ > 9 dan juga y+1 > 4
		//padahal pada no 5 nilai x bernilai 9 dan nilai y bernilai 4/sebanding bukan lebih dari
		
		System.out.println("6. " + (x > 9 && y+1 > 4));
		//Logical operator and ini akan menghasilkan nilai false karena salah satu dari dua statement bernilai salah yaitu y+1 > 4
		//padahal pada no 6 nilai y bernilai 3 jika ditambah 1 maka hasilnya sebanding bukan lebih dari
		
		System.out.println("7. " + (x++ > 9 || y+1 == 4));
		//Logical operator or ini akan menghasilkan nilai true karena dari kedua statement bernilai benar yaitu x++ > 9 dan juga y+1 == 4
		//yang dimana nilai x nya yaitu 10 dan y bernilai 4(Sebanding)
		
		System.out.println("8. " + (x > 9 || y+1 == 4));
		//Logical operator or ini akan menghasilkan nilai true karena dari kedua statement bernilai benar yaitu x > 9 dan juga y+1 == 4
		//yang dimana nilai x nya yaitu 11 dan y bernilai 4(Sebanding)
		
		System.out.println("\n=============================");
		System.out.println("Program : Latihan03c");
		System.out.println("NIM     : A12.2020.06496");
		System.out.println("Nama    : Diffa Azkhani");
	}
}