public class Latihan02f{
	public static void main(String abcd[]){
		//program sebelumnya akan terjadi error karena tidak memungkinkan jika double menjadi int ataupun sebaliknya
		//solusi yang saya ambil yaitu mengubah nilai pada array variabel myList menjadi bilangan bulat semua seperti {1, 2, 3, 4, 5}
		//atau mengubah tipe data variabel myList menjadi double juga bisa
		int myList[] = {1, 2, 3, 4, 5};
		for(int i=0; i < myList.length; i++){
			System.out.println(myList[i]);
		}
	}
}