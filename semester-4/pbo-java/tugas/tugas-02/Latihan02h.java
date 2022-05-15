public class Latihan02h {
	public static void main(String[] args){
		double myDouble = 9.78;
		int myInt = (int)myDouble;
		//program sebelumnya akan error karena belum dilakukan casting yaitu dengan menambahkan (int) di depan variabel myDouble
		//setelah ditambahkan maka program dapat dijalankan, dengan output menjadi  myDouble = 9.78 dan myInt = 9
		
		System.out.println(myDouble);
		System.out.println(myInt);
	}
}