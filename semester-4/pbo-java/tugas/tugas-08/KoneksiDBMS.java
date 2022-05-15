import java.sql.*;

public class KoneksiDBMS {
    String driverdbms = "com.mysql.cj.jdbc.Driver";
    String database = "jdbc:mysql://localhost/dbdiffa6496";
    String user = "diffa6496";
    String password = "";

    public KoneksiDBMS() {

    }

    public Connection BukaCn() throws SQLException {
        Connection condbms = null;
        try {
            Class.forName(driverdbms);
            condbms = DriverManager.getConnection(database, user, password);

            return condbms;
        }

        catch (SQLException se) {
            System.out.println("Ada kesalahan pada SQL !");
            return null;
        }

        catch (Exception ex) {
            System.out.println("Koneksi database tidak berhasil !");
            return null;
        }
    }
}
