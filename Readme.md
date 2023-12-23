ローカルの落とし方
git clone コマンドで手元に落ちてくる 
```
git clone https://github.com/ERUTONE/WOL.git
```
落とせたらdocker-compose.ymlを開いてこの位置に**起動したいPCのIPアドレスとMACアドレスを記述しよう**
```
environment:
    ip_address: 192.168.1.1
    mac_address: xx:xx:xx:xx:xx:xx
```
docker composeで立ち上げる。 
```
docker compose up -d
```

以下のリンクにアクセスします。 http://localhost:8080
