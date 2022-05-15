import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class Latihan06c extends JFrame implements ActionListener {
    private JPanel      jpCalculator = new JPanel();
	
	private JTextField  fLayar       = new JTextField();
	private JLabel      labelmhs     = new JLabel("NIM: A12.2020.06496 Nama: Diffa Azkhani");
	
	private JButton     btnTambah    = new JButton ("+"),
	                    btnKurang    = new JButton ("-"),
	                    btnKali      = new JButton ("*"),
	                    btnBagi      = new JButton ("/"),
	                    btnTitik     = new JButton ("."),
	                    btnC         = new JButton ("C"),
	                    btn1         = new JButton ("1"),
	                    btn2         = new JButton ("2"),
	                    btn3         = new JButton ("3"),
	                    btn4         = new JButton ("4"),
	                    btn5         = new JButton ("5"),
	                    btn6         = new JButton ("6"),
	                    btn7         = new JButton ("7"),
	                    btn8         = new JButton ("8"),
	                    btn9         = new JButton ("9"),
	                    btn0         = new JButton ("0"),
	                    btnSama      = new JButton ("=");

    private String isiLayar = "";
    private String snilai1, snilai2, tombol;
    private int hasil;
    Font font1 = new Font("SansSerif", Font.BOLD, 24);

    public Latihan06c() {
        setPreferredSize(new Dimension(500, 600));
        setTitle("Kalkulator");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        new BorderLayout();
        JDesktopPane jpCalculator = new JDesktopPane();
        add(jpCalculator, BorderLayout.CENTER);

        // Mengatur letak objek Text di Container
	 	//(50, 90, 385, 50); : (kolom, baris, panjang, tinggi);
	 	fLayar.setBounds(50,90,385,50);
	 	fLayar.setFont(font1);
	 	labelmhs.setBounds(50,480,400,50);
	 	
	 	//Mengatur letak objek Button di Container
	 	btnC.setBounds (350,160,85,50);
	 	btnTambah.setBounds(350,370,85,50);
	 	btnKurang.setBounds(350,440,85,50);
	 	btnKali.setBounds(350,230,85,50);
	 	btnBagi.setBounds(350,300,85,50);
	 	btnTitik.setBounds(150,440,85,50);
	 	
	 	btnSama.setBounds(250,440,85,50);
	 	//btnSama.setLAbel("="); bisa juga diatur disini...
	 	
	 	//Mengatur objek untuk dapat berinteraksi
	 	//(kolom, baris, panjang, tinggi);
	 	btn1.setBounds(50,370,85,50);
	 	btn2.setBounds(150,370,85,50);
	 	btn3.setBounds(250,370,85,50);	 	
		btn4.setBounds(50,300,85,50);
	 	btn5.setBounds(150,300,85,50);
	 	btn6.setBounds(250,300,85,50);
		btn7.setBounds(50,230,85,50);
	 	btn8.setBounds(150,230,85,50);
	 	btn9.setBounds(250,230,85,50);
	 	btn0.setBounds(50,440,85,50);
	 	
	 	fLayar.setHorizontalAlignment(JTextField.RIGHT);
	 	
	 	//Objek Button di Non aktifkan dan di aktifkan
	 	btnTambah.setEnabled(true);
	 	
	 	//Mengatur objek untuk dapat berinteraksi
	 	btn1.addActionListener(this);
	 	btn2.addActionListener(this);
	 	btn3.addActionListener(this);
	 	btn4.addActionListener(this);
	 	btn5.addActionListener(this);
	 	btn6.addActionListener(this);
	 	btn7.addActionListener(this);
	 	btn8.addActionListener(this);
	 	btn9.addActionListener(this);
	 	btn0.addActionListener(this);
	 	
	 	btnC.addActionListener(this);
	 	btnSama.addActionListener(this);
	 	btnTambah.addActionListener(this);
	 	btnKurang.addActionListener(this);
	 	btnKali.addActionListener(this);
	 	btnBagi.addActionListener(this);
	 	btnTitik.addActionListener(this);
	 	
	 	//Meletakan seluruh control pada objek panel
	 	jpCalculator.add (fLayar);
	 	jpCalculator.add (labelmhs);
	 	jpCalculator.add (btn1);
	 	jpCalculator.add (btn2);
	 	jpCalculator.add (btn3);
	 	jpCalculator.add (btn4);
	 	jpCalculator.add (btn5);
	 	jpCalculator.add (btn6);
	 	jpCalculator.add (btn7);
	 	jpCalculator.add (btn8);
	 	jpCalculator.add (btn9);
	 	jpCalculator.add (btn0);
	 	
	 	jpCalculator.add (btnTambah);
	 	jpCalculator.add (btnKurang);
	 	jpCalculator.add (btnKali);
        jpCalculator.add (btnBagi);
        jpCalculator.add (btnTitik);
	 	jpCalculator.add (btnC);
	 	jpCalculator.add (btnSama);

        // menambahkan objek panel (jpCalculator) ke kontainer frame
        getContentPane().add(jpCalculator).setBackground(Color.getHSBColor(100, 100, 100));
        //(Color.getHSBColor(0,0,0)) solahkan angka 0 di atas di ganti dengan 0 sd 255

        // menampilkan frame ke layar monitor
        pack();
        setVisible(true);
    }

    public static void main(String[] args) {
        new Latihan06c().setVisible(true);
    }

    public void falseButton() {
        btnTambah.setEnabled(false);
        btnKurang.setEnabled(false);
        btnKali.setEnabled(false);
        btnBagi.setEnabled(false);
    }

    public void trueButton() {
        btnTambah.setEnabled(true);
        btnKurang.setEnabled(true);
        btnKali.setEnabled(true);
        btnBagi.setEnabled(true);
    }

    // Fungsi jika user melakukan action penekanan tombol Button
    public void actionPerformed(ActionEvent ae) {
        Object obj = ae.getSource();

        if(obj == btnC){
	 		tombol = ""; snilai1 = ""; snilai2 = "";
	 		isiLayar = "";
	 		fLayar.setText(isiLayar);
	 	}
	 	if(obj == btn1){
	 		isiLayar = isiLayar + "1";
	 		fLayar.setText(isiLayar);
	 	}
	 	if(obj == btn2){
	 		isiLayar = isiLayar + "2";
	 		fLayar.setText(isiLayar);
	 	}
	 	if(obj == btn3){
	 		isiLayar = isiLayar + "3";
	 		fLayar.setText(isiLayar);
	 	}
	 	if (obj == btn4) {
            isiLayar = isiLayar + "4";
            fLayar.setText(isiLayar);
        }
        if (obj == btn5) {
            isiLayar = isiLayar + "5";
            fLayar.setText(isiLayar);
        }
        if (obj == btn6) {
            isiLayar = isiLayar + "6";
            fLayar.setText(isiLayar);
        }
        if (obj == btn7) {
            isiLayar = isiLayar + "7";
            fLayar.setText(isiLayar);
        }
        if (obj == btn8) {
            isiLayar = isiLayar + "8";
            fLayar.setText(isiLayar);
        }
        if (obj == btn9) {
            isiLayar = isiLayar + "9";
            fLayar.setText(isiLayar);
        }
        if (obj == btn0) {
            isiLayar = isiLayar + "0";
            fLayar.setText(isiLayar);
        }
        
        
	 	if (obj == btnTambah) {
            tombol = "+";
            snilai1 = fLayar.getText();
            isiLayar = "";
            fLayar.setText(isiLayar);
            btnSama.setEnabled(true);
            falseButton();
        }
        if (obj == btnKurang) {
            tombol = "-";
            snilai1 = fLayar.getText();
            isiLayar = "";
            fLayar.setText(isiLayar);
            btnSama.setEnabled(true);
            falseButton();
        }
        if (obj == btnKali) {
            tombol = "*";
            snilai1 = fLayar.getText();
            isiLayar = "";
            fLayar.setText(isiLayar);
            btnSama.setEnabled(true);
            falseButton();
        }
        if (obj == btnBagi) {
            tombol = "/";
            snilai1 = fLayar.getText();
            isiLayar = "";
            fLayar.setText(isiLayar);
            btnSama.setEnabled(true);
            falseButton();
        }
        if (obj == btnTitik) {
            isiLayar = isiLayar + ".";
            fLayar.setText(isiLayar);
        }
        
	 	if(obj == btnSama){
	 		snilai2 = fLayar.getText();
            //saat ditekan tombol samadengan...
	 		//(sebelumnya operator yg digunakan tambah)...
            switch (tombol) {
            case "+":
                hasil = Integer.parseInt(snilai1) + Integer.parseInt(snilai2);
                break;
            case "-":
                hasil = Integer.parseInt(snilai1) - Integer.parseInt(snilai2);
                break;
            case "*":
                hasil = Integer.parseInt(snilai1) * Integer.parseInt(snilai2);
                break;
            case "/":
                hasil = Integer.parseInt(snilai1) / Integer.parseInt(snilai2);
                break;
            default:
                break;
            }

            String shasil = "" + hasil;
            fLayar.setText(shasil);
            btnSama.setEnabled(false);
            trueButton();
        }
    } //tutup method public void actionPerfomed

    //fungsi untuk mengkosongkan Objek layar tampilan
    void Kosong() {
        fLayar.setText("");
        fLayar.requestFocus();
    }
}