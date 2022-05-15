import java.awt.*;
import java.awt.event.*;
import java.io.*;
import javax.swing.*;
import java.sql.*;


public class FHitungInput extends JFrame implements ActionListener {
    private JPanel     pPgw    = new JPanel();
    private JLabel     lNilai1 = new JLabel("Nilai 1        "),
                       lNilai2 = new JLabel("Nilai 2        "),
                       lHasil  = new JLabel("Hasil          "),
                       lcreate = new JLabel("nama");

    private JTextField fNilai1 = new JTextField(),
                       fNilai2 = new JTextField(),
                       fHasil = new JTextField();

    private JButton    btnTambah = new JButton(),
                       btnKurang = new JButton(),
                       btnKali = new JButton(),
                       btnBagi = new JButton(),
                       btnBersih = new JButton(),
                       btnSelesai = new JButton();

    public FHitungInput() {
        setPreferredSize(new Dimension(450, 280));
        setTitle("Form Hitung");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        JDesktopPane pPgw = new JDesktopPane();

        // Mengatur letak ojek Lael di Container
        lNilai1.setBounds(15, 20, 100, 25);
        lNilai2.setBounds(15, 55, 100, 25);
        lHasil.setBounds(15, 90, 100, 25);
        lcreate.setBounds(170, 210, 260, 25);
        lcreate.setText("Create by Diffa Azkhani (A12.2020.06496)");

        //Mengatur letak objek rext di container
        fNilai1.setBounds(115, 20, 100, 25);
        fNilai2.setBounds(115, 55, 205, 25);
        fHasil.setBounds(115, 90, 92, 25);
        fNilai1.setToolTipText("Isi nilai dengan Angka !");

        //Mengatur letak objek Button di Container
        btnTambah.setBounds(50, 150, 85, 25);
        btnTambah.setText("Tambah");
        btnTambah.setBackground(Color.red);
        btnTambah.setForeground(Color.getHSBColor(50, 0, 55));
        btnKurang.setBounds(150, 150, 85, 25);
        btnKurang.setText("Kurang");
        btnKali.setBounds(50, 185, 85, 25);
        btnKali.setText("Kali");
        btnBagi.setBounds(150, 185, 85, 25);
        btnBagi.setText("Bagi");
        btnBersih.setBounds(250, 150, 75, 25);
        btnBersih.setText("Bersih");
        btnSelesai.setBounds(335, 150, 80, 25);
        btnSelesai.setText("Selesai");
        btnSelesai.setToolTipText("Mengakhiri Program");

        //Objek Button di non aktifkan dan di aktifkan
        btnTambah.setEnabled(true);
        btnSelesai.setEnabled(true);

        //Mengatur objek untuk dapat berinteraksi
        btnTambah.addActionListener(this);
        btnKurang.addActionListener(this);
        btnKali.addActionListener(this);
        btnBagi.addActionListener(this);
        btnBersih.addActionListener(this);
        btnSelesai.addActionListener(this);

        //meletakkan seluruh kontrol pada objek panel
        pPgw.add(lNilai1);
        pPgw.add(fNilai1);
        pPgw.add(lNilai2);
        pPgw.add(fNilai2);
        pPgw.add(lHasil);
        pPgw.add(fHasil);
        pPgw.add(lcreate);
        pPgw.add(btnKurang);
        pPgw.add(btnTambah);
        pPgw.add(btnKali);
        pPgw.add(btnBagi);
        pPgw.add(btnBersih);
        pPgw.add(btnSelesai);

        //menambahkan objek panel (pPgr) ke container frame
        getContentPane().add(pPgw).setBackground(Color.getHSBColor(250, 0, 255));

        //menampilkan frame ke layar monitor
        pack();
    }

    public static void main(String[] args) {
        new FHitungInput().setVisible(true);
    }

    //fungsi jika user melakukan action penekanan tombol button
    public void actionPerformed(ActionEvent ae) {
        Object obj = ae.getSource();

        if (obj == btnTambah) {
            methodTambah();
        }
        if (obj == btnKurang) {
            methodKurang();
        }
        if (obj == btnKali) {
            methodKali();
        }
        if (obj == btnBagi) {
            methodBagi();
        }
        if (obj == btnBersih) {
            kosong();
        }
        if (obj == btnSelesai) {
            System.exit(0);
        }
    }

    void methodTambah() {
        int xhasil = Integer.parseInt(fNilai1.getText()) + Integer.parseInt(fNilai2.getText());
        fHasil.setText(Integer.toString(xhasil));
    }

    void methodKurang() {
        int xhasil = Integer.parseInt(fNilai1.getText()) - Integer.parseInt(fNilai2.getText());
        fHasil.setText(Integer.toString(xhasil));
    }

    void methodKali() {
        int xhasil = Integer.parseInt(fNilai1.getText()) * Integer.parseInt(fNilai2.getText());
        fHasil.setText(Integer.toString(xhasil));
    }

    void methodBagi() {
        int xhasil = Integer.parseInt(fNilai1.getText()) / Integer.parseInt(fNilai2.getText());
        fHasil.setText(Integer.toString(xhasil));
    }

    //Fungsi untuk mengkosongkan Ojek masukan
    void kosong() {
        fNilai1.setText("");
        fNilai2.setText("");
        fHasil.setText("");
        fNilai1.requestFocus();
    }
}