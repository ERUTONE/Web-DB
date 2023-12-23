ローカルの落とし方
git clone コマンドで手元に落ちてくる 
```
git clone https://github.com/ERUTONE/WOL.git
```
落とせたらdocker-compose.ymlを開いてこの位置に**起動したいPCのIPアドレスとMACアドレスを記述しよう**
```
    environment:
      - wakeonlan=wakeonlan -i 192.168.1.1 xx:xx:xx:xx:xx:xx
      - ping=ping -c 1 192.168.1.1
```
docker composeで立ち上げる。 
```
docker compose up -d
```

以下のリンクにアクセスします。 http://localhost:8080
