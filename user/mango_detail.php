<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ข้อมูลพันธุ์มะม่วง</title>
  <style>
    body {
      font-family: "Kanit", sans-serif;
      background-color: #fff;
      margin: 20px;
      padding: 0;
    }
    .header {
      text-align: center;
    }
    .header img {
      width: 100%;
      max-height: 300px;
      object-fit: cover;
    }
    .section {
      margin-top: 30px;
    }
    .center-img {
      display: block;
      margin: 20px auto;
      max-width: 300px;
      border: 2px solid #ddd;
    }
    .columns {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      margin-top: 20px;
    }
    .column {
      flex: 1;
      background-color: #e3f2fd;
      padding: 15px;
      border-radius: 10px;
    }
    .column h3 {
      margin-top: 0;
    }
    ul {
      padding-left: 20px;
    }
    .info-row {
      display: flex;
      align-items: flex-start;
      gap: 32px;
      margin-bottom: 30px;
    }
    .info-img {
      flex: 0 0 50vw;
      max-width: 50vw;
      min-width: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .info-img img {
      width: 100%;
      height: auto;
      max-width: 100%;
      border: 2px solid #ddd;
      border-radius: 16px;
      display: block;
      margin: 0;
      object-fit: cover;
    }
    .info-content {
      flex: 1;
      background: #e3f2fd;
      border-radius: 10px;
      padding: 18px 22px;
      min-width: 0;
    }
    @media (max-width: 900px) {
      .info-row {
        flex-direction: column;
        gap: 16px;
      }
      .info-img, .info-img img {
        max-width: 100vw;
        min-width: 0;
      }
      .info-content {
        padding: 14px 10px;
      }
      /* ปรับให้กล่อง morphology-box กว้าง 50% และอยู่ตรงกลาง */
.morphology-box {
  width: 50%;
  margin: 0 auto;
  justify-content: space-between;
}

@media (max-width: 900px) {
  .morphology-box {
    width: 100%;
    flex-direction: column;
  }
}

    }
  </style>
</head>
<body>

  <div class="header">
    <img src="https://media.istockphoto.com/id/1435602408/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%9B%E0%B8%B4%E0%B8%94%E0%B8%9C%E0%B8%A5%E0%B9%84%E0%B8%A1%E0%B9%89%E0%B8%A1%E0%B8%B0%E0%B8%A1%E0%B9%88%E0%B8%A7%E0%B8%87%E0%B9%81%E0%B8%94%E0%B8%87.jpg?s=2048x2048&w=is&k=20&c=_CtXk_bCsLbqqFFV1nNllvyUhNnJL_TusxCHO-FTHOQ=" alt="ภาพมะม่วงหลายผล">
    <h1>ชื่อพันธุ์ภาษาไทย<br>ชื่อพันธุ์ภาษาอังกฤษ</h1>
  </div>

  <div class="section">
    <!-- แถวแสดงภาพ + ข้อมูลทั่วไป -->
    <div class="info-row">
      <!-- รูปผลมะม่วงเดี่ยว -->
      <div class="info-img">
        <img src="https://media.istockphoto.com/id/1180170520/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%A1%E0%B8%B0%E0%B8%A1%E0%B9%88%E0%B8%A7%E0%B8%87%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%81%E0%B8%A2%E0%B8%81%E0%B8%9A%E0%B8%99%E0%B8%9E%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%87%E0%B8%AA%E0%B8%B5%E0%B8%82%E0%B8%B2%E0%B8%A7-%E0%B9%80%E0%B8%AA%E0%B9%89%E0%B8%99%E0%B8%97%E0%B8%B2%E0%B8%87%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%95%E0%B8%B1%E0%B8%94-%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%A5%E0%B8%B6%E0%B8%81%E0%B9%80%E0%B8%95%E0%B9%87%E0%B8%A1%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B9%81%E0%B8%9A%E0%B8%9A%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B8%99%E0%B8%B2%E0%B8%A1.jpg?s=612x612&w=0&k=20&c=i4Y8_kDD3V-xGErxkLiiWniFNC_0fabV__R53JFlGbQ=" alt="ภาพผลเดียว">
      </div>
      <!-- กล่องข้อมูลทั่วไป -->
      <div class="info-content">
        <h2>ชื่อวิทยาศาสตร์</h2>
        <ul>
          <li>ชื่อท้องถิ่น</li>
          <li>หมวดมะม่วง: เชิงพาณิชย์, เชิงอนุรักษ์, บริโภคในครัวเรือน</li>
        </ul>
        <h2>การขยายพันธุ์</h2>
        <ul>
          <li>การเพาะจากเมล็ด</li>
          <li>เสียบยอด</li>
          <li>ทาบกิ่ง</li>
        </ul>
        <h2>ลักษณะของดิน</h2>
        <p>—</p>
        <h2>ระยะเวลาเพาะปลูก</h2>
        <p>—</p>
        <h2>การแปรรูป</h2>
        <ul>
          <li>ดอง</li>
          <li>แช่อิ่ม</li>
          <li>กวน</li>
          <li>อบแห้ง</li>
        </ul>
        <h2>นิยมรับประทานสด</h2>
        <p>—</p>
      </div>
    </div>
  </div>

  <!-- ✅ ลักษณะสัณฐานวิทยา: อยู่ด้านล่าง info-row และกว้างแค่ครึ่งหน้าจอ -->
  <div class="section" style="max-width: 50vw; margin: 0 auto;">
    <h2 style="text-align: center;">ลักษณะสัณฐานวิทยา</h2>
    <div class="columns morphology-box">
      <div class="column">
        <h3>ต้น</h3>
        <ul>
          <li>ฟอร์มต้น</li>
          <li>ทรวดทรง</li>
          <li>แตกกิ่งย่อย</li>
          <li>ช่องอากาศ</li>
        </ul>
      </div>
      <div class="column">
        <h3>ใบ</h3>
        <ul>
          <li>การเรียงใบ</li>
          <li>ลักษณะใบ</li>
          <li>แผ่นใบ</li>
          <li>ที่มีช่องอากาศ</li>
        </ul>
      </div>
      <div class="column">
        <h3>ดอก</h3>
        <ul>
          <li>ขนาด</li>
          <li>รูปร่าง</li>
          <li>รูปพุ่มหรือช่อ</li>
          <li>รูปทรงเฉพาะตัว</li>
        </ul>
      </div>
    </div>
  </div>

  

</body>
</html>
