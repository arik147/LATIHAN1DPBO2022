import java.util.*;

public class Main {
    public static void main(String[] args)
    {
        // tim pertama
        FootballTeam tim1 = new FootballTeam();
        tim1.setNamaTim("Persib");
        tim1.setNegara("Indonesia");
        tim1.setTahun("1933");
        tim1.setPemain("Mario_Jardel");

        // variabel input tim kedua
        String namaTim, negara, tahun, pemain;

        System.out.println("Masukkan Tim Kedua : Nama Tim, Negara, Tahun, Pemain");

        // inputan tim kedua
        Scanner scan = new Scanner(System.in);
        namaTim = scan.nextLine();
        negara = scan.nextLine();
        tahun = scan.nextLine();
        pemain = scan.nextLine();
        scan.close();

        // konstruktor tim kedua
        FootballTeam tim2 = new FootballTeam(namaTim, negara, tahun, pemain);

        // output tim pertama
        System.out.println("==================================");
        System.out.println("Tim Pertama");
        System.out.println("==================================");
        System.out.println("Nama Tim : " + tim1.getNamaTim());
        System.out.println("Negara : " + tim1.getNegara());
        System.out.println("Tahun Berdiri : " + tim1.getTahun());
        System.out.println("Pemain : " + tim1.getPemain());
        System.out.println("==================================");

        System.out.println("");

        // output tim kedua
        System.out.println("==================================");
        System.out.println("Tim Kedua");
        System.out.println("==================================");
        System.out.println("Nama Tim : " + tim2.getNamaTim());
        System.out.println("Negara : " + tim2.getNegara());
        System.out.println("Tahun Berdiri : " + tim2.getTahun());
        System.out.println("Pemain : " + tim2.getPemain());
        System.out.println("==================================");
    }
}