# Randevu

Randevu modülünü eklemek için öncelikle,

Komut satırında modülümüzü ekleyeceğimiz yere (@vendor/kouosl/) altına geliyoruz.
Ardından "git clone https://github.com/onurtaskiran95/Randevu.git" komutunu çalıştırarak modülümüzü projemize indiriyoruz.
Portal klasörünün içerisindeki composer.json dosyasında gerekli yerlere şu satırları ekliyoruz;

############################

"repositories": [
    {
        ....
        {
            "type": "vcs",
            "url": "https://github.com/onurtaskiran95/Randevu.git"
        }
],



"require": {
     
    ....   
    "kouosl/Randevu": "dev-master"
},

############################

Ekledikten sonra sanal makinaya bağlanarak şu komutları çalıştırıyoruz;

cd /var/www/portal
sudo chmod -R 777 vendor/kouosl/MODUL_ADI
composer update

Son adım olarakda modülümüzde "migrations" klasöründeki .php uzantılı dosyayı kopyalayıyoruz ve portal dizininde "console/migrations/" altına yapıştırıyoruz.
Ardından sanal makinamızda,

 php yii migrate
 
Komutunu çalıştırıyoruz böylelikle veritabanımızı oluşturup örnek bir kayıt ekliyoruz. 

Modül kurulumu tamamlanmıştır.