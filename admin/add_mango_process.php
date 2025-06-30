<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลมะม่วง | ระบบจัดการข้อมูลมะม่วง</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2e7d32;
            --secondary-color: #4caf50;
            --accent-color: #ff9800;
            --light-bg: #f8f9fa;
            --card-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        
        body {
            background: linear-gradient(135deg, #f1f8e9 0%, #e8f5e9 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            padding: 20px 0;
        }
        
        .mango-header {
            background: linear-gradient(90deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            border-radius: 10px 10px 0 0;
            padding: 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .mango-header::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            transform: rotate(30deg);
        }
        
        .mango-header h1 {
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
            position: relative;
        }
        
        .mango-header h1 i {
            margin-right: 12px;
            animation: pulse 2s infinite;
        }
        
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
            margin-bottom: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }
        
        .card-body {
            padding: 30px;
        }
        
        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        
        .form-control, .form-select, .form-check-input {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px 15px;
            transition: all 0.3s;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.25rem rgba(76, 175, 80, 0.25);
        }
        
        .nav-tabs {
            border-bottom: 2px solid #e0e0e0;
            margin-bottom: 25px;
        }
        
        .nav-tabs .nav-link {
            color: #555;
            font-weight: 600;
            border: none;
            border-radius: 8px 8px 0 0;
            padding: 12px 25px;
            transition: all 0.3s;
        }
        
        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            background-color: rgba(46, 125, 50, 0.1);
            border-bottom: 3px solid var(--primary-color);
        }
        
        .nav-tabs .nav-link:hover:not(.active) {
            color: var(--secondary-color);
            background-color: rgba(76, 175, 80, 0.05);
        }
        
        .section-title {
            color: var(--primary-color);
            border-left: 4px solid var(--accent-color);
            padding-left: 12px;
            margin: 25px 0 20px;
            font-weight: 700;
        }
        
        .checkbox-group {
            background: #f8fff8;
            border-radius: 10px;
            padding: 15px;
            border: 1px solid #e8f5e9;
        }
        
        .checkbox-group label {
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .checkbox-group label:hover {
            color: var(--primary-color);
            transform: translateX(5px);
        }
        
        .image-preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 15px;
        }
        
        .image-preview {
            width: 100px;
            height: 100px;
            border-radius: 8px;
            border: 2px dashed #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-color: #f9f9f9;
            transition: all 0.3s;
        }
        
        .image-preview:hover {
            border-color: var(--secondary-color);
            transform: scale(1.05);
        }
        
        .image-preview img {
            max-width: 100%;
            max-height: 100%;
            display: none;
        }
        
        .image-preview i {
            font-size: 24px;
            color: #ccc;
        }
        
        .btn-submit {
            background: linear-gradient(90deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            font-size: 18px;
            border-radius: 50px;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(46, 125, 50, 0.3);
            display: block;
            width: 100%;
            max-width: 300px;
            margin: 30px auto 20px;
        }
        
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 15px rgba(46, 125, 50, 0.4);
        }
        
        .btn-submit:active {
            transform: translateY(0);
        }
        
        .btn-back {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s;
        }
        
        .btn-back:hover {
            color: var(--secondary-color);
            transform: translateX(-5px);
        }
        
        .required::after {
            content: " *";
            color: #e53935;
        }
        
        .mango-icon {
            color: var(--accent-color);
            margin-right: 10px;
            font-size: 1.2em;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @media (max-width: 768px) {
            .card-body {
                padding: 20px;
            }
            
            .nav-tabs .nav-link {
                padding: 10px 15px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="mango-header">
                        <h1><i class="fas fa-seedling"></i>เพิ่มข้อมูลมะม่วง</h1>
                        <p class="mb-0">กรอกข้อมูลมะม่วงพันธุ์ใหม่ลงในระบบ</p>
                    </div>
                    
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="mangoTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="basic-tab" data-bs-toggle="tab" data-bs-target="#basic" type="button" role="tab">ข้อมูลพื้นฐาน</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="category-tab" data-bs-toggle="tab" data-bs-target="#category" type="button" role="tab">หมวดหมู่และการขยายพันธุ์</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="morphology-tab" data-bs-toggle="tab" data-bs-target="#morphology" type="button" role="tab">ลักษณะสัณฐานวิทยา</button>
                            </li>
                        </ul>
                        
                        <form id="mangoForm" action="add_mango_process.php" method="post" enctype="multipart/form-data">
                            <div class="tab-content" id="mangoTabsContent">
                                <!-- Tab 1: Basic Information -->
                                <div class="tab-pane fade show active" id="basic" role="tabpanel">
                                    <h3 class="section-title"><i class="fas fa-info-circle mango-icon"></i>ข้อมูลทั่วไป</h3>
                                    
                                    <div class="mb-4">
                                        <label class="form-label required">อัพโหลดรูปภาพหลัก (Header)</label>
                                        <input type="file" name="header_img" class="form-control" accept="image/*" required
                                            onchange="previewImage(this, 'headerPreview')">
                                        <small class="text-muted">รูปภาพขนาดแนะนำ 1200x400 พิกเซล</small>
                                        
                                        <div class="image-preview-container mt-3">
                                            <div class="image-preview" id="headerPreview">
                                                <i class="fas fa-image"></i>
                                                <img src="" alt="Header Preview">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label required">ชื่อวิทยาศาสตร์</label>
                                            <input type="text" name="name_sci" class="form-control" placeholder="กรุณากรอกชื่อวิทยาศาสตร์" required>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label required">ชื่อท้องถิ่น</label>
                                            <input type="text" name="name_local" class="form-control" placeholder="กรุณากรอกชื่อท้องถิ่น" required>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label required">ลักษณะของดินที่เหมาะสม</label>
                                            <textarea name="soil" class="form-control" rows="3" placeholder="กรุณาอธิบายลักษณะดินที่เหมาะสำหรับปลูกมะม่วงพันธุ์นี้" required></textarea>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label required">ระยะเวลาเพาะปลูก</label>
                                            <textarea name="planting_period" class="form-control" rows="3" placeholder="กรุณาระบุระยะเวลาเพาะปลูกจนถึงเก็บเกี่ยว" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Tab 2: Category and Propagation -->
                                <div class="tab-pane fade" id="category" role="tabpanel">
                                    <h3 class="section-title"><i class="fas fa-tags mango-icon"></i>หมวดหมู่มะม่วง</h3>
                                    
                                    <div class="checkbox-group mb-5">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="category[]" value="เชิงพาณิชย์" id="commercial">
                                            <label class="form-check-label" for="commercial">
                                                เชิงพาณิชย์
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="category[]" value="เชิงอนุรักษ์" id="conservation">
                                            <label class="form-check-label" for="conservation">
                                                เชิงอนุรักษ์
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="category[]" value="บริโภคในครัวเรือน" id="household">
                                            <label class="form-check-label" for="household">
                                                บริโภคในครัวเรือน
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <h3 class="section-title"><i class="fas fa-seedling mango-icon"></i>การขยายพันธุ์</h3>
                                    
                                    <div class="checkbox-group mb-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="propagation[]" value="การเพาะจากเมล็ด" id="seed">
                                            <label class="form-check-label" for="seed">
                                                การเพาะจากเมล็ด
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="propagation[]" value="เสียบยอด" id="grafting">
                                            <label class="form-check-label" for="grafting">
                                                เสียบยอด
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="propagation[]" value="ทาบกิ่ง" id="layering">
                                            <label class="form-check-label" for="layering">
                                                ทาบกิ่ง
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <h3 class="section-title"><i class="fas fa-cogs mango-icon"></i>การแปรรูป</h3>
                                    
                                    <div class="checkbox-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="processing[]" value="ดอง" id="pickle">
                                                    <label class="form-check-label" for="pickle">
                                                        ดอง
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="processing[]" value="แช่อิ่ม" id="candied">
                                                    <label class="form-check-label" for="candied">
                                                        แช่อิ่ม
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="processing[]" value="กวน" id="jam">
                                                    <label class="form-check-label" for="jam">
                                                        กวน
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="processing[]" value="อบแห้ง" id="dried">
                                                    <label class="form-check-label" for="dried">
                                                        อบแห้ง
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="processing[]" value="นิยมรับประทานสด" id="fresh">
                                                    <label class="form-check-label" for="fresh">
                                                        นิยมรับประทานสด
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Tab 3: Morphology -->
                                <div class="tab-pane fade" id="morphology" role="tabpanel">
                                    <h3 class="section-title"><i class="fas fa-leaf mango-icon"></i>ลักษณะสัณฐานวิทยา</h3>
                                    <p class="text-muted mb-4">อัพโหลดรูปภาพส่วนต่างๆ ของมะม่วง (ไม่บังคับ)</p>
                                    
                                    <div class="row">
                                        <div class="col-md-4 mb-4">
                                            <label class="form-label">ผล</label>
                                            <input type="file" name="morph_fruit" class="form-control" accept="image/*"
                                                onchange="previewImage(this, 'fruitPreview')">
                                            
                                            <div class="image-preview-container mt-3">
                                                <div class="image-preview" id="fruitPreview">
                                                    <i class="fas fa-apple-alt"></i>
                                                    <img src="" alt="Fruit Preview">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 mb-4">
                                            <label class="form-label">ต้น</label>
                                            <input type="file" name="morph_tree" class="form-control" accept="image/*"
                                                onchange="previewImage(this, 'treePreview')">
                                            
                                            <div class="image-preview-container mt-3">
                                                <div class="image-preview" id="treePreview">
                                                    <i class="fas fa-tree"></i>
                                                    <img src="" alt="Tree Preview">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 mb-4">
                                            <label class="form-label">ใบ</label>
                                            <input type="file" name="morph_leaf" class="form-control" accept="image/*"
                                                onchange="previewImage(this, 'leafPreview')">
                                            
                                            <div class="image-preview-container mt-3">
                                                <div class="image-preview" id="leafPreview">
                                                    <i class="fas fa-leaf"></i>
                                                    <img src="" alt="Leaf Preview">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4 mb-4">
                                            <label class="form-label">ดอก</label>
                                            <input type="file" name="morph_flower" class="form-control" accept="image/*"
                                                onchange="previewImage(this, 'flowerPreview')">
                                            
                                            <div class="image-preview-container mt-3">
                                                <div class="image-preview" id="flowerPreview">
                                                    <i class="fas fa-spa"></i>
                                                    <img src="" alt="Flower Preview">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 mb-4">
                                            <label class="form-label">กิ่ง</label>
                                            <input type="file" name="morph_branch" class="form-control" accept="image/*"
                                                onchange="previewImage(this, 'branchPreview')">
                                            
                                            <div class="image-preview-container mt-3">
                                                <div class="image-preview" id="branchPreview">
                                                    <i class="fas fa-code-branch"></i>
                                                    <img src="" alt="Branch Preview">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-submit">
                                <i class="fas fa-save me-2"></i>บันทึกข้อมูลมะม่วง
                            </button>
                            
                            <div class="text-center">
                                <a href="Dashboard.php" class="btn-back">
                                    <i class="fas fa-arrow-left me-2"></i>กลับสู่แดชบอร์ด
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="text-center text-muted mt-4">
                    <p>ระบบจัดการข้อมูลมะม่วง © 2023 | พัฒนาโดยทีมงานเกษตรดิจิทัล</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Function to preview images before upload
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            const img = preview.querySelector('img');
            const icon = preview.querySelector('i');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    img.src = e.target.result;
                    img.style.display = 'block';
                    icon.style.display = 'none';
                }
                
                reader.readAsDataURL(input.files[0]);
            } else {
                img.style.display = 'none';
                icon.style.display = 'block';
            }
        }
        
        // Form validation
        document.getElementById('mangoForm').addEventListener('submit', function(e) {
            const sciName = document.querySelector('input[name="name_sci"]');
            const localName = document.querySelector('input[name="name_local"]');
            const headerImg = document.querySelector('input[name="header_img"]');
            
            if (!sciName.value.trim()) {
                alert('กรุณากรอกชื่อวิทยาศาสตร์');
                sciName.focus();
                e.preventDefault();
                return false;
            }
            
            if (!localName.value.trim()) {
                alert('กรุณากรอกชื่อท้องถิ่น');
                localName.focus();
                e.preventDefault();
                return false;
            }
            
            if (!headerImg.files.length) {
                alert('กรุณาอัพโหลดรูปภาพหลัก');
                e.preventDefault();
                return false;
            }
            
            // Add any additional validation here
            
            return true;
        });
        
        // Add fade-in animation to form elements
        document.querySelectorAll('.form-control, .checkbox-group, .image-preview-container').forEach(el => {
            el.classList.add('fade-in');
        });
    </script>
</body>
</html>