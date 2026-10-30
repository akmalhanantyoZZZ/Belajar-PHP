# Catatan Pribadi

## Cara Inisialisasi dan Connect VSCode ke GitHub

1. Buat Repository di GitHub terlebih dahulu (biarkan kosong/tanpa README).
2. Buka terminal di folder proyek VSCode.
3. Inisialisasi dan hubungkan ke remote:

```bash
git init
git branch -M main
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/username-kamu/proyek-saya.git
git push -u origin main
```

---

## Cara Menambahkan Perubahan dan Push ke GitHub

1. Cek file yang mengalami perubahan (opsional):
   ```bash
   git status
   ```
2. Simpan dan unggah perubahan:
   ```bash
   git add .
   git commit -m "Pesan commit sesuai perubahan"
   git push
   ```