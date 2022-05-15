public class Latihan02e {
	public static void main(String[] args){
		int a, t;
		double luas;
		
		a=2; t=7;
		luas = 0.5 * a * t;
		
		//mengubah variabel luas menjadi integer...
		int luasInt = (int)luas;
		//hasilnya akan menjadi bilangan bulat bukan desimal lagi
		
		System.out.println("Luas Segitiga : " + luasInt);
	}
}