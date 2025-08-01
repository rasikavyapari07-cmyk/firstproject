<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .course-form-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .form-header h2 {
            color: #3a5169;
            font-weight: 600;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        
        .form-header p {
            color: #6c757d;
            font-size: 1.05rem;
        }
        
        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }
        
        .form-control {
            border: 1px solid #ced4da;
            transition: border-color 0.15s ease-in-out;
        }
        
        .input-group-text {
            background-color: #f8f9fa;
            color: #495057;
            border: 1px solid #ced4da;
        }
        
        .btn-submit {
            background-color: #4361ee;
            border: none;
            padding: 10px 24px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s cubic-bezier(.25,.8,.25,1);
            box-shadow: 0 2px 4px rgba(67, 97, 238, 0.3);
        }
        
        .btn-submit:hover {
            background-color: #3a56d4;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(67, 97, 238, 0.3);
        }
        
        .btn-outline-secondary {
            border-color: #dee2e6;
            color: #495057;
        }
        
        .btn-outline-secondary:hover {
            background-color: #f8f9fa;
        }
        
        .form-control:focus {
            border-color: #4361ee;
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.15);
            outline: 0;
        }
        
        .form-select:focus {
            border-color: #4361ee;
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.15);
        }
        
        .duration-unit {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="course-form-container">
            <div class="form-header">
                <h2><i class="fas fa-book-open me-2"></i>Course Registration</h2>
                <p>Register a new course in the system</p>
            </div>
            
            <form method="insert.php" action="get">
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label for="courseId" class="form-label"> ID</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                            <input type="text" class="form-control" id="courseId"name="courseid" placeholder="Enter course ID" required>
                        </div>
                        
                    
                    <div class="col-md-6 mb-3">
                        <label for="courseName" class="form-label"> Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                            <input type="text" class="form-control" id="Name"name="name" placeholder="Enter your name" required>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label for="courseDuration" class="form-label">Duration</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="courseDuration" name="courseDuration" placeholder="Enter duration" min="1" required>
                            <select class="form-select duration-unit" id="durationUnit">
                                <option value="weeks">Weeks</option>
                                <option value="months" selected>Months</option>
                                <option value="semesters">Semesters</option>
                                <option value="years">Years</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="courseFees" class="form-label">Fees </label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            <input type="number" class="form-control" id="courseFees" name="courseFees" placeholder="Enter course fees" min="0" step="0.01" required>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="course" class="form-label">Course</label>
                    <select class="form-select" id="course" name="course" required>
                        <option value="" disabled selected>Select category</option>
                        <option value="computer-science">Computer Science</option>
                        <option value="mathematics">information technology</option>
                        <option value="business">Business</option>
                        <option value="engineering">Engineering</option>
                        <option value="arts">WEB</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-outline-secondary me-md-2"><i class="fas fa-times me-1"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary btn-submit"><i class="fas fa-save me-1"></i> Register Course</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
