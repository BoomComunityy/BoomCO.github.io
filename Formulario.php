<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Productos con Rutas</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body, ul, li, p, a, label, input, div {
            font-family: 'Roboto', sans-serif;
            font-size: 18px !important;
            font-weight: 300 !important;
            color: #333;
        }
        
        .h1 {
            font-family: 'Roboto', sans-serif;
            font-size: 48px !important;
            font-weight: 200 !important;
            margin-bottom: 30px;
        }
        
        .h2 {
            font-family: 'Roboto', sans-serif;
            font-size: 30px !important;
            font-weight: 300;
            margin-bottom: 20px;
        }
        
        .h3 {
            font-family: 'Roboto', sans-serif;
            font-size: 22px !important;
            margin-bottom: 15px;
        }
        
        .logo { 
            font-weight: 500 !important;
        }
        
        .text-warning { 
            color: #695FA8 !important;
        }
        
        .text-muted { 
            color: hsl(280, 5%, 88%) !important;
        }
        
        .text-success { 
            color: #695FA8 !important;
        }
        
        .text-light { 
            color: #b4ade1 !important;
        }
        
        .bg-dark { 
            background-color: #262d36 !important;
            color: #f8f9fa !important;
        }
        
        .bg-light { 
            background-color: #e2e0e3 !important;
        }
        
        .bg-black { 
            background-color: #695FA8 !important;
        }
        
        .bg-success { 
            background-color: #b8b4d3 !important;
        }
        
        .btn-success {
            background-color: #96aacf !important;
            border-color: #9992CA !important;
            color: #fff !important;
            transition: all 0.3s ease;
            font-weight: 500 !important;
            padding: 15px 35px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            display: block;
            margin-top: 20px;
        }
        
        .btn-success:hover {
            background-color: #695FA8 !important;
            border-color: #5c5296 !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        /* Estilos personalizados */
        body {
            background: linear-gradient(135deg, #e2e0e3 0%, #f5f4f7 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 900px;
            margin: 40px auto;
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .form-header {
            background-color: #695FA8;
            padding: 30px 40px;
            color: white;
            text-align: center;
        }
        
        .form-content {
            padding: 40px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 700 !important;
            color: #262d36;
        }
        
        input, textarea, select {
            width: 100%;
            padding: 14px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #695FA8;
            box-shadow: 0 0 0 3px rgba(105, 95, 168, 0.1);
        }
        
        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }
        
        .form-col {
            flex: 1;
        }
        
        .btn-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn-group button {
            flex: 1;
        }
        
        .btn-secondary {
            background-color: #e2e0e3 !important;
            color: #333 !important;
            padding: 15px 35px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.3s;
            font-weight: 500;
        }
        
        .btn-secondary:hover {
            background-color: #d0ced1 !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .image-upload {
            border: 2px dashed #b8b4d3;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            background-color: #f9f9ff;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .image-upload:hover {
            border-color: #695FA8;
            background-color: #f0efff;
        }
        
        .image-upload i {
            font-size: 48px;
            color: #695FA8;
            margin-bottom: 15px;
            display: block;
        }
        
        .preview-container {
            position: relative;
            display: inline-block;
            margin: 10px;
        }
        
        .preview-image {
            max-width: 200px;
            max-height: 200px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-top: 10px;
            object-fit: cover;
        }
        
        .delete-image-btn {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            cursor: pointer;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            transition: all 0.3s;
        }
        
        .delete-image-btn:hover {
            background-color: #c0392b;
            transform: scale(1.1);
        }
        
        .image-info {
            font-size: 14px;
            color: #666;
            margin-top: 10px;
            font-weight: 400;
        }
        
        .form-footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #666;
        }
        
        .required::after {
            content: " *";
            color: #e74c3c;
            font-weight: bold;
        }
        
        .bold-text {
            font-weight: 700 !important;
        }
        
        .instructions {
            font-weight: 400;
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 25px;
            border-left: 4px solid #695FA8;
        }
        
        .route-info {
            background-color: #f0f7ff;
            padding: 15px;
            border-radius: 8px;
            margin-top: 30px;
            border-left: 4px solid #96aacf;
        }
        
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .container {
                margin: 20px;
            }
            
            .form-header, .form-content {
                padding: 25px;
            }
            
            .btn-group {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-header">
            <h1 class="h1"><strong>Agregar Nuevo Producto</strong></h1>
            <p>Completa <b>todos</b> los campos para añadir un nuevo producto a tu catálogo</p>
        </div>
        
        <div class="form-content">
            <div class="instructions">
                <p><strong>Importante:</strong> Las imágenes se redimensionarán automáticamente a 720×745 píxeles.</p>
                <p>Puedes eliminar imágenes haciendo clic en el botón rojo (✕).</p>
            </div>
            
            <form id="productForm">
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="productName" class="required">Nombre del Producto</label>
                            <input type="text" id="productName" name="productName" required placeholder="Ej: Camiseta de algodón">
                        </div>
                    </div>
                    
                    <div class="form-col">
                        <div class="form-group">
                            <label for="productCategory" class="required">Categoría</label>
                            <select id="productCategory" name="productCategory" required>
                                <option value="">Selecciona una categoría</option>
                                <option value="ropa">Ropa</option>
                                <option value="electronica">Electrónica</option>
                                <option value="hogar">Hogar</option>
                                <option value="deportes">Deportes</option>
                                <option value="belleza">Belleza</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="productPrice" class="required">Precio (COP)</label>
                            <input type="number" id="productPrice" name="productPrice" required min="0" step="0.01" placeholder="Ej: 10000">
                        </div>
                    </div>
                    
                    <div class="form-col">
                        <div class="form-group">
                            <label for="productStock" class="required">Stock Disponible</label>
                            <input type="number" id="productStock" name="productStock" required min="0" placeholder="Ej: 100">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="productDescription" class="required">Descripción del Producto</label>
                    <textarea id="productDescription" name="productDescription" rows="4" required placeholder="Describe las características y beneficios del producto..."></textarea>
                </div>
                
                <div class="form-group">
                    <label>Imagen del Producto</label>
                    <div class="image-upload" id="imageUpload">
                        <i>📷</i>
                        <p>Haz clic o arrastra una imagen aquí</p>
                        <input type="file" id="productImage" name="productImage" accept="image/*" style="display: none;">
                    </div>
                    <div class="image-preview" id="imagePreview">
                        <!-- Aquí se mostrarán las imágenes -->
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="productTags">Etiquetas (separadas por comas)</label>
                    <input type="text" id="productTags" name="productTags" placeholder="Ej: ropa, verano, algodón">
                </div>
                
                <!-- Grupo de botones con rutas -->
                <div class="btn-group">
                    <button type="submit" class="btn-success">Agregar Producto</button>
                    <button type="button" class="btn-secondary" onclick="window.location.href='/boomCo.github.ioCo.github.io/index.php'">Inicio</button>
                    <button type="button" class="btn-secondary" onclick="window.location.href='/boomCo.github.ioCo.github.io/shop.php'">Ver Catálogo</button>
                </div>
            </form>
            
            
            
            <div class="form-footer">
                <p><strong>Nota:</strong> Los campos marcados con <span class="required" style="color: #e74c3c;"></span> son obligatorios.</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imageUpload = document.getElementById('imageUpload');
            const fileInput = document.getElementById('productImage');
            const imagePreview = document.getElementById('imagePreview');
            
            // Array para almacenar imágenes
            let uploadedImages = [];
            
            // Función para redimensionar una imagen
            function resizeImage(file, callback) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = new Image();
                    img.onload = function() {
                        const canvas = document.createElement('canvas');
                        const ctx = canvas.getContext('2d');
                        
                        const maxWidth = 720;
                        const maxHeight = 745;
                        
                        let width = img.width;
                        let height = img.height;
                        
                        if (width > maxWidth) {
                            height *= maxWidth / width;
                            width = maxWidth;
                        }
                        
                        if (height > maxHeight) {
                            width *= maxHeight / height;
                            height = maxHeight;
                        }
                        
                        canvas.width = maxWidth;
                        canvas.height = maxHeight;
                        
                        ctx.fillStyle = '#f9f9ff';
                        ctx.fillRect(0, 0, canvas.width, canvas.height);
                        
                        const offsetX = (maxWidth - width) / 2;
                        const offsetY = (maxHeight - height) / 2;
                        
                        ctx.drawImage(img, offsetX, offsetY, width, height);
                        
                        const resizedImage = canvas.toDataURL('image/jpeg', 0.9);
                        callback(resizedImage);
                    };
                    img.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
            
            // Manejar la subida de imágenes
            imageUpload.addEventListener('click', () => {
                fileInput.click();
            });
            
            fileInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const file = this.files[0];
                    
                    resizeImage(file, function(resizedImage) {
                        const imageContainer = document.createElement('div');
                        imageContainer.className = 'preview-container';
                        imageContainer.style.display = 'inline-block';
                        imageContainer.style.margin = '10px';
                        
                        const img = document.createElement('img');
                        img.className = 'preview-image';
                        img.src = resizedImage;
                        img.width = 200;
                        img.height = 200;
                        img.alt = 'Vista previa de la imagen';
                        
                        const deleteBtn = document.createElement('button');
                        deleteBtn.className = 'delete-image-btn';
                        deleteBtn.innerHTML = '✕';
                        deleteBtn.title = 'Eliminar imagen';
                        
                        const info = document.createElement('div');
                        info.className = 'image-info';
                        info.innerHTML = '720×745 píxeles';
                        
                        imageContainer.appendChild(img);
                        imageContainer.appendChild(deleteBtn);
                        imageContainer.appendChild(info);
                        
                        imagePreview.appendChild(imageContainer);
                        
                        uploadedImages.push({
                            original: file,
                            resized: resizedImage,
                            container: imageContainer
                        });
                        
                        deleteBtn.addEventListener('click', function(e) {
                            e.preventDefault();
                            const index = uploadedImages.findIndex(img => img.container === imageContainer);
                            if (index !== -1) {
                                uploadedImages.splice(index, 1);
                            }
                            imageContainer.remove();
                        });
                    });
                    
                    this.value = '';
                }
            });
            
            // Permitir arrastrar y soltar imágenes
            imageUpload.addEventListener('dragover', (e) => {
                e.preventDefault();
                imageUpload.style.borderColor = '#695FA8';
                imageUpload.style.backgroundColor = '#f0efff';
            });
            
            imageUpload.addEventListener('dragleave', () => {
                imageUpload.style.borderColor = '#b8b4d3';
                imageUpload.style.backgroundColor = '#f9f9ff';
            });
            
            imageUpload.addEventListener('drop', (e) => {
                e.preventDefault();
                if (e.dataTransfer.files && e.dataTransfer.files[0]) {
                    const file = e.dataTransfer.files[0];
                    
                    resizeImage(file, function(resizedImage) {
                        const imageContainer = document.createElement('div');
                        imageContainer.className = 'preview-container';
                        imageContainer.style.display = 'inline-block';
                        imageContainer.style.margin = '10px';
                        
                        const img = document.createElement('img');
                        img.className = 'preview-image';
                        img.src = resizedImage;
                        img.width = 200;
                        img.height = 200;
                        img.alt = 'Vista previa de la imagen';
                        
                        const deleteBtn = document.createElement('button');
                        deleteBtn.className = 'delete-image-btn';
                        deleteBtn.innerHTML = '✕';
                        deleteBtn.title = 'Eliminar imagen';
                        
                        const info = document.createElement('div');
                        info.className = 'image-info';
                        info.innerHTML = '720×745 píxeles';
                        
                        imageContainer.appendChild(img);
                        imageContainer.appendChild(deleteBtn);
                        imageContainer.appendChild(info);
                        
                        imagePreview.appendChild(imageContainer);
                        
                        uploadedImages.push({
                            original: file,
                            resized: resizedImage,
                            container: imageContainer
                        });
                        
                        deleteBtn.addEventListener('click', function(e) {
                            e.preventDefault();
                            const index = uploadedImages.findIndex(img => img.container === imageContainer);
                            if (index !== -1) {
                                uploadedImages.splice(index, 1);
                            }
                            imageContainer.remove();
                        });
                    });
                }
            });
            
            // Manejar el envío del formulario
            document.getElementById('productForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const productName = document.getElementById('productName').value;
                const productPrice = document.getElementById('productPrice').value;
                
                if (!productName || !productPrice) {
                    alert('Por favor completa los campos obligatorios');
                    return;
                }
                
                const productData = {
                    name: productName,
                    category: document.getElementById('productCategory').value,
                    price: productPrice,
                    stock: document.getElementById('productStock').value,
                    description: document.getElementById('productDescription').value,
                    tags: document.getElementById('productTags').value,
                    images: uploadedImages.map(img => img.resized)
                };
                
                console.log('Datos del producto:', productData);
                alert('¡Producto agregado exitosamente!\n\n' + 
                      `Nombre: ${productData.name}\n` +
                      `Precio: $${productData.price}\n` +
                      `Imágenes: ${productData.images.length}`);
                
                // Redirigir después de 2 segundos
                setTimeout(function() {
                    window.location.href = '/catalogo?nuevo_producto=' + encodeURIComponent(productData.name);
                }, 2000);
            });
            
            // Función para ir a una categoría específica
            window.irACategoria = function(categoria) {
                window.location.href = '/categoria/' + categoria;
            }
        });
    </script>
</body>
</html>