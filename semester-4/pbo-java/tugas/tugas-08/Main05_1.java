class mobil05_1 {
    String nama;

    mobil05_1(){}
    mobil05_1(String nama){
        this.nama = nama;
    }
    public void setnama(String nama){
        this.nama = nama;
    }
}

class CobaMobil{
    public static void main(String[] args){
        mobil05_1 mobilx = new mobil05_1();
        mobil05_1 mobilLCGC = new mobil05_1("Agya");
        System.out.println("Mobil LCGC   : " + mobilLCGC.nama);
        mobilx.setnama("Wuling");
        System.out.println("Mobil        : " + mobilx.nama);
    }
}
