public class Latihan03b {
	public static void main(String abcd[]) {
		int a, hasil;
		a = 14;
		hasil = (a++ > 14) ? 10: 20;
		System.out.println("Output Satu   : " + hasil);
		//program ini akan memberikan variabel hasil dengan nilai 20, karena nilai a tidak lebih besar dari 14
		//maka dari itu hasilnya akan false dan menjadi 20
		
		hasil = (a++ <= 14) ? 30: 40;
		System.out.println("Output Dua    : " + hasil);
		//program ini akan memberikan variabel hasil dengan nilai 40, karena nilai a tidak kurang dari sama dengan 14
		//maka dari itu hasilnya akan false dan menjadi 40
		
		hasil = (a>14 && a<45) ? 50: 60;
		System.out.println("Output Tiga   : " + hasil);
		//program ini akan memberikan variabel hasil dengan nilai 50, karena pada kondisi diatas mengharuskan nilai a leibh besar dari 14 dan juga kurang dari 45
		//maka dari itu hasilnya akan true dan menjadi 50
		
		hasil = (a<14 || a<45) ? 70: 80;
		System.out.println("Output Empat  : " + hasil);
		//program ini akan memberikan variabel hasil dengan nilai 70, karena dari kondisi diatas mengharuskan nilai a bernilai lebih dari 14 atau kurang dari 45
		//maka dari itu hasilnya akan true dan menjadi 70
		
		System.out.println("\n=============================");
		System.out.println("Program : Latihan03b");
		System.out.println("NIM     : A12.2020.06496");
		System.out.println("Nama    : Diffa Azkhani");
	}
}