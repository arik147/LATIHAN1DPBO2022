public class FootballTeam
{
    private String namaTim;
    private String negara;
    private String tahun;
    private String pemain;
    
    // kontruktor
    public FootballTeam(String namaTim, String negara, String tahun, String pemain)
    {
        this.namaTim = namaTim;
        this.negara = negara;
        this.tahun = tahun;
        this.pemain = pemain;
    }
    
    public FootballTeam(){}

    // set nama Tim
    public void setNamaTim(String namaTim)
    {
        this.namaTim = namaTim;
    }

    // get nama tim
    public String getNamaTim()
    {
        return namaTim;
    }

    // set negara
    public void setNegara(String negara)
    {
        this.negara = negara;
    }

    // get negara
    public String getNegara()
    {
        return negara;
    }

    // set Tahun berdiri
    public void setTahun(String tahun)
    {
        this.tahun = tahun;
    }

    // get tahun berdiri
    public String getTahun()
    {
        return tahun;
    }

    // set Pemain
    public void setPemain(String pemain)
    {
        this.pemain = pemain;
    }

    // get Pemain
    public String getPemain()
    {
        return pemain;
    }
}