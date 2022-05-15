import java.awt.*;
import java.awt.event.*;
import java.io.*;
import javax.swing.*;
import java.sql.*;

public class Latihan07a extends JFrame implements ActionListener {
    private JPanel      pPgw        = new JPanel();
	private JLabel      lNip        = new JLabel ("NIP       "),
	                    lNama       = new JLabel ("Nama      "),
	                    lBagian     = new JLabel ("Bagian    "),
	                    lcreate     = new JLabel ("nama");
    private JTextField  fNip        = new JTextField(),
                        fNama       = new JTextField(),
                        fBagian     = new JTextField();
    private JButton     btnAdd      = new JButton(),
                        btnCari     = new JButton(),
                        btnKoreksi  = new JButton(),
                        btnHapus    = new JButton(),
                        btnSelesai  = new JButton();

    public Latihan07a() {
        setPreferredSize(new Dimension(450, 300));
        setTitle("Program Data Pegawai");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        JDesktopPane pPgw = new JDesktopPane();

        //Mengatur letak objek label di container
        lNip.setBounds(15, 20, 100, 25);
        lNama.setBounds(15, 55, 100, 25);
        lBagian.setBounds(15, 90, 100, 25);
        lcreate.setBounds(160, 210, 290, 25);
        lcreate.setText("Create by Diffa Azkhani // A12.2020.06496");

        //Mengatur letak objek text di container
        fNip.setBounds(115, 20, 110, 25);
        fNama.setBounds(115, 55, 210, 25);
        fBagian.setBounds(115, 90, 110, 25);
        fNip.setToolTipText("Isi Nip dengan Angka !");

        ///Mengatur letak objek Button di Container
        btnAdd.setBounds(20, 150, 85, 25);
        btnAdd.setText("Add");
        btnAdd.setBackground(Color.BLUE);
        btnAdd.setForeground(Color.getHSBColor(250, 0, 255));
        btnCari.setBounds(120, 150, 85, 25);
        btnCari.setText("Cari");
        btnKoreksi.setBounds(220, 150, 85, 25);
        btnKoreksi.setText("Koreksi");
        btnHapus.setBounds(220, 185, 85, 25);
        btnHapus.setText("Hapus");
        btnSelesai.setBounds(320, 150, 85, 60);
        btnSelesai.setText("Selesai");
        btnSelesai.setToolTipText("Mengakhiri Program");

        //Objek Button di Non aktifkan dan di aktifkan
        btnAdd.setEnabled(true);
        btnSelesai.setEnabled(true);

        //Mengatur objek untuk dapat berinteraksi
        btnAdd.addActionListener(this);
        btnCari.addActionListener(this);
        btnKoreksi.addActionListener(this);
        btnHapus.addActionListener(this);
        btnSelesai.addActionListener(this);

        //Meletakkan seluruh kontrol pada objek panel
        pPgw.add(lNip);
        pPgw.add(fNip);
        pPgw.add(lNama);
        pPgw.add(fNama);
        pPgw.add(lBagian);
        pPgw.add(fBagian);
        pPgw.add(lcreate);
        pPgw.add(btnAdd);
        pPgw.add(btnCari);
        pPgw.add(btnKoreksi);
        pPgw.add(btnHapus);
        pPgw.add(btnSelesai);

        //Menambahkan objek panel ( Ppgw ) ke container frame
        getContentPane().add(pPgw).setBackground(Color.GRAY);

        //menampilkan frame ke layar monitor
        pack();
        Kosong();
        setTombol(1, 1, 0, 0, 1);
    }

    public static void main(String[] args) {
        new Latihan07a().setVisible(true);
    }

    //fungsi jika user melakukan action penekanan tombol Button
    public void actionPerformed(ActionEvent ae) {
        Object obj = ae.getSource();

        //saat dipilih add
        if (obj == btnAdd) {
            if (btnAdd.getText() == "Simpan") {
                String xnip = fNip.getText();
                if (xnip.length() != 0)
                    Add();
                else
                    JOptionPane.showMessageDialog(this, "Nip Kosong !");

                btnAdd.setText("Add");
                Kosong();
                setTombol(1, 1, 0, 0, 1);
            } else {
                Kosong();
                setTombol(1, 0, 0, 0, 1);
                btnAdd.setText("Simpan");
                btnAdd.setForeground(Color.getHSBColor(100, 10, 0));
                btnAdd.setBackground(Color.getHSBColor(200, 100, 100));
            }
        }

        //saat dipilih cari
        if (obj == btnCari) {
            String xcari = JOptionPane.showInputDialog(this, "Masukkan Nip !");
            if (xcari != null) {
                fNip.setText(xcari);
                int xx = Cari();
                if (xx == 1)
                    setTombol(1, 1, 1, 1, 1);
            } else
                JOptionPane.showMessageDialog(this, "Nip kosong !");
        }

        //saat dipilih koreksi
        if (obj == btnKoreksi) {
            if (btnKoreksi.getText() == "Simpan") {
                if (fNip.getText() != null)
                    Koreksi();
                btnKoreksi.setText("Koreksi");
                Kosong();
                setTombol(1, 1, 0, 0, 1);
            } else {
                btnKoreksi.setText("Simpan");
                setTombol(0, 0, 1, 0, 1);
                fNama.requestFocus();
            }
        }

        //saat dipilih hapus
        if (obj == btnHapus) {
            int stt = JOptionPane.showConfirmDialog(this, "Yakin dihapus ?");
            System.out.print(stt);

            if (stt == 0) {
                Hapus();
                Kosong();
            }
        }

        //saat dipilih selesai
        if (obj == btnSelesai) {
            System.exit(0);
        }
    }

    //fungsi untuk menambahkan data ke tabel barang
    void Add() {
        try {
            JOptionPane.showMessageDialog(this, "Proses untuk Add!");
        } catch (Exception e) {
            JOptionPane.showMessageDialog(this, "Penambahan Gagal!!!");
        }
    }

    //Fungsi untuk mencari kode_barang ke tabel barang
    int Cari() {
        int x = 0;
        return x;
    }

    //fungsi untuk menambahkan data ke tabel barang
    void Koreksi() {

    }

    //Fungsi untuk menambahkan data ke tabel barang
    void Hapus() {

    }

    //Fungsi untuk menambahkan data ke tabel barang
    void Kosong() {
        fNip.setText("");
        fNama.setText("");
        fBagian.setText("");
        fNip.requestFocus();
    }

    void setTombol(int a, int b, int c, int d, int e) {
        btnAdd.setEnabled(a >= 1 ? true : false);
        btnCari.setEnabled(b >= 1 ? true : false);
        btnKoreksi.setEnabled(c >= 1 ? true : false);
        btnHapus.setEnabled(d >= 1 ? true : false);
        btnSelesai.setEnabled(e >= 1 ? true : false);
    }

}