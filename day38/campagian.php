<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .registration-header {
            background: linear-gradient(135deg, #3a7bd5 0%, #00d2ff 100%);
            color: white;
            padding: 3rem 0;
            margin-bottom: 3rem;
        }
        
        .registration-card {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            border-radius: 1rem;
            overflow: hidden;
        }
        
        .campaign-image {
            height: 100%;
            object-fit: cover;
        }
        
        .form-section {
            padding: 2.5rem;
        }
        
        .progress-steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
        }
        
        .step {
            text-align: center;
            flex: 1;
            position: relative;
        }
        
        .step-number {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            background: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.5rem auto;
            font-weight: bold;
        }
        
        .step.active .step-number {
            background: #0d6efd;
            color: white;
        }
        
        .step.completed .step-number {
            background: #198754;
            color: white;
        }
        
        .step-title {
            font-size: 0.875rem;
            font-weight: 500;
        }
        
        .step:not(:last-child)::after {
            content: "";
            position: absolute;
            top: 1.25rem;
            left: 50%;
            width: 100%;
            height: 2px;
            background: #e9ecef;
            z-index: -1;
        }
        
        .step.completed:not(:last-child)::after {
            background: #198754;
        }
        
        .benefit-item {
            margin-bottom: 1rem;
            padding-left: 1.75rem;
            position: relative;
        }
        
        .benefit-item::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #198754;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="registration-header text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Join Our Marketing Campaign</h1>
            <p class="lead">Register now to receive exclusive offers and updates</p>
        </div>
    </div>
    
    <!-- Registration Form -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card registration-card">
                    <div class="row g-0">
                        <!-- Image Column -->
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="https://placehold.co/800x1000" alt="Team discussing digital marketing campaign metrics on laptops and mobile devices" class="img-fluid campaign-image">
                        </div>
                        
                        <!-- Form Column -->
                        <div class="col-lg-6">
                            <div class="form-section">
                                <!-- Progress Steps -->
                                <div class="progress-steps">
                                    <div class="step active">
                                        <div class="step-number">1</div>
                                        <div class="step-title">Basic Info</div>
                                    </div>
                                    <div class="step">
                                        <div class="step-number">2</div>
                                        <div class="step-title">Preferences</div>
                                    </div>
                                    <div class="step">
                                        <div class="step-number">3</div>
                                        <div class="step-title">Complete</div>
                                    </div>
                                </div>
                                
                                <h2 class="h4 mb-4">Registration Form</h2>
                                
                                <!-- Registration Form -->
                                <form id="campaignRegistrationForm">
                                    <div class="mb-3">
                                        <label for="fullName" class="form-label">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="fullName" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="companyName" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="companyName">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="industry" class="form-label">Industry <span class="text-danger">*</span></label>
                                        <select class="form-select" id="industry" required>
                                            <option value="" selected disabled>Select your industry</option>
                                            <option value="retail">Retail/E-Commerce</option>
                                            <option value="technology">Technology</option>
                                            <option value="finance">Finance</option>
                                            <option value="healthcare">Healthcare</option>
                                            <option value="education">Education</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Preferred Campaign Channels</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="socialMedia" checked>
                                            <label class="form-check-label" for="socialMedia">Social Media</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="emailCampaigns">
                                            <label class="form-check-label" for="emailCampaigns">Email Campaigns</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="searchAds">
                                            <label class="form-check-label" for="searchAds">Search Ads</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="displayAds">
                                            <label class="form-check-label" for="displayAds">Display Ads</label>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="budget" class="form-label">Monthly Marketing Budget</label>
                                        <select class="form-select" id="budget">
                                            <option value="" selected disabled>Select budget range</option>
                                            <option value="0-1000">$0 - $1,000</option>
                                            <option value="1001-5000">$1,001 - $5,000</option>
                                            <option value="5001-10000">$5,001 - $10,000</option>
                                            <option value="10001+">$10,000+</option>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="termsAgreement" required>
                                        <label class="form-check-label" for="termsAgreement">I agree to the <a href="#">terms and conditions</a> and <a href="#">privacy policy</a> <span class="text-danger">*</span></label>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary w-100 py-2">Register for Campaign</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Benefits Section -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mb-4">Campaign Benefits</h2>
                <div class="row text-start">
                    <div class="col-md-6">
                        <div class="benefit-item">
                            <h4 class="h5">Targeted Advertising</h4>
                            <p class="text-muted">Reach your ideal customers with precision targeting.</p>
                        </div>
                        <div class="benefit-item">
                            <h4 class="h5">Analytics Dashboard</h4>
                            <p class="text-muted">Monitor campaign performance in real-time.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-item">
                            <h4 class="h5">Expert Support</h4>
                            <p class="text-muted">Dedicated account manager to optimize results.</p>
                        </div>
                        <div class="benefit-item">
                            <h4 class="h5">Performance Reports</h4>
                            <p class="text-muted">Regular detailed reports on campaign metrics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="bg-light py-4">
        <div class="container text-center">
            <p class="mb-0">© 2023 Digital Marketing Campaigns. All rights reserved.</p>
            <p class="text-muted small mb-0">Contact us: support@marketingcampaigns.com</p>
        </div>
    </footer>
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Form Validation Script -->
    <script>
        document.getElementById('campaignRegistrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Form validation
            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const industry = document.getElementById('industry').value;
            const termsAgreement = document.getElementById('termsAgreement').checked;
            
            if (!fullName || !email || !industry || !termsAgreement) {
                alert('Please fill in all required fields');
                return;
            }
            
            // Form submission success
            alert('Thank you for registering! We will contact you shortly.');
            this.reset();
            
            // In a real application, you would send the data to a server here
            // Example:
            // const formData = new FormData(this);
            // fetch('/api/register', {
            //     method: 'POST',
            //     body: formData
            // })
            // .then(response => response.json())
            // .then(data => {
            //     // Handle success
            // })
            // .catch(error => {
            //     // Handle error
            // });
        });
    </script>
</body>
</html>
