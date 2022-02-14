#include "FootballTeam.cpp"

using namespace std;

int main()
{
    // Tim pertama
    FootballTeam tim1;
    tim1.setNamaTim("Persib");
    tim1.setNegara("Indonesia");
    tim1.setTahun(1933);
    tim1.setPemain("Mario_Jardel");

    // variabel input tim 2
    string namaTim, negara, pemain;
    int tahun;

    // input variabel tim 2
    cout << "Masukkan Tim kedua : nama Tim, Negara, Tahun berdiri, Pemain" << endl;
    cin >> namaTim;
    cin >> negara;
    cin >> tahun;
    cin >> pemain;

    // tim kedua
    FootballTeam tim2(namaTim, negara, tahun, pemain);
    
    // menampilkan tim pertama
    cout << "Tim Pertama" << endl;

    cout << "Nama Tim : " << tim1.getNamaTim() << endl;
    cout << "Negara : " << tim1.getNegara() << endl;
    cout << "Tahun Berdiri : " << tim1.getTahun() << endl;
    cout << "Pemain : " << tim1.getPemain() << endl << endl;
    
    // menampilkan tim Kedua

    cout << "Tim Kedua" << endl;
    
    cout << "Nama Tim : " << tim2.getNamaTim() << endl;
    cout << "Negara : " << tim2.getNegara() << endl;
    cout << "Tahun Berdiri : " << tim2.getTahun() << endl;
    cout << "Pemain : " << tim2.getPemain() << endl;

    return 0;
}