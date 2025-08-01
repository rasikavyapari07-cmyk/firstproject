<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigitalMarketing - Marketing Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary: #6f42c1;
            --primary-light: #8a63d2;
            --secondary: #20c997;
            --dark: #2d3748;
            --light: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
        }
        
        .sidebar {
            background-color: var(--dark);
            min-height: 100vh;
            transition: all 0.3s;
        }
        
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            margin-bottom: 5px;
        }
        
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: var(--primary);
            color: white;
        }
        
        .sidebar .nav-link i {
            margin-right: 10px;
        }
        
        .card-analytics {
            border-left: 4px solid var(--primary);
        }
        
        .card-campaign {
            border-left: 4px solid var(--secondary);
        }
        
        .card-audience {
            border-left: 4px solid #fd7e14;
        }
        
        .card-performance {
            border-left: 4px solid #dc3545;
        }
        
        .progress-thin {
            height: 6px;
        }
        
        .chart-container {
            position: relative;
            height: 250px;
        }
        
        .campaign-item {
            border-left: 3px solid transparent;
            transition: all 0.3s;
        }
        
        .campaign-item:hover {
            background-color: #f8f9fa;
            border-left-color: var(--primary);
        }
        
        .badge-pill {
            padding: 5px 10px;
            border-radius: 50px;
        }
        
        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="wrapper d-flex">
        <!-- Sidebar -->
        <div class="sidebar p-3" style="width: 250px;">
            <div class="text-center mb-4">
                <img src="https://placehold.co/150x50?text=DigitalConnect" alt="DigitalConnect marketing platform logo in white with purple gradient" class="img-fluid">
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="campaign.php">
                        <i class="bi bi-megaphone"></i> Campaigns
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="audience.php">
                        <i class="bi bi-people"></i> Audience
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-graph-up"></i> Analytics
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">
                        <i class="bi bi-graph-up"></i> registration
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="email.php">
                        <i class="bi bi-envelope"></i> Email Marketing
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-facebook"></i> Social Media
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-search"></i> SEO Tools
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-file-earmark-text"></i> Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-gear"></i> Settings
                    </a>
                </li>
                <li class="nav-item mt-4">
                    <div class="border-top pt-3">
                        <div class="d-flex align-items-center">
                            <img src="https://placehold.co/40x40" alt="User profile picture" class="avatar me-2">
                            <div>
                                <div class="text-white">John Doe</div>
                                <small class="text-white-50">Admin</small>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
        <!-- Main Content -->
        <div class="main-content flex-grow-1 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">Marketing Dashboard</h2>
                <div>
                    <button class="btn btn-primary me-2">
                        <i class="bi bi-plus-circle"></i> New Campaign
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="bi bi-download"></i> Export
                    </button>
                </div>
            </div>
            
            <!-- Summary Cards -->
            <div class="row mb-4">
                <div class="col-md-3 mb-3">
                    <div class="card card-analytics shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-2">Total Visits</h6>
                                    <h3 class="mb-0">24,532</h3>
                                </div>
                                <div class="bg-primary bg-opacity-10 p-3 rounded">
                                    <i class="bi bi-eye-fill text-primary"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="text-success"><i class="bi bi-arrow-up"></i> 12.5%</span>
                                <span class="text-muted">vs last month</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card card-campaign shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-2">Conversions</h6>
                                    <h3 class="mb-0">1,843</h3>
                                </div>
                                <div class="bg-success bg-opacity-10 p-3 rounded">
                                    <i class="bi bi-currency-dollar text-success"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="text-success"><i class="bi bi-arrow-up"></i> 8.3%</span>
                                <span class="text-muted">vs last month</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card card-audience shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-2">ROI</h6>
                                    <h3 class="mb-0">4.8x</h3>
                                </div>
                                <div class="bg-warning bg-opacity-10 p-3 rounded">
                                    <i class="bi bi-graph-up text-warning"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="text-success"><i class="bi bi-arrow-up"></i> 1.2x</span>
                                <span class="text-muted">vs last month</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card card-performance shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-2">Avg. Session</h6>
                                    <h3 class="mb-0">2m 45s</h3>
                                </div>
                                <div class="bg-danger bg-opacity-10 p-3 rounded">
                                    <i class="bi bi-clock-fill text-danger"></i>
                                </div>
                            </div>
                            <div class="mt-3">
                                <span class="text-danger"><i class="bi bi-arrow-down"></i> 15s</span>
                                <span class="text-muted">vs last month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Charts Row -->
            <div class="row mb-4">
                <div class="col-md-8 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Traffic Overview</h5>
                            <div class="chart-container">
                                <!-- Chart placeholder - would be replaced with actual chart -->
                                <img src="https://placehold.co/800x300?text=Traffic+Chart+Placeholder" alt="Line chart showing website traffic trends over last 30 days with organic, paid and direct traffic layers" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Traffic Sources</h5>
                            <div class="chart-container">
                                <!-- Chart placeholder -->
                                <img src="https://placehold.co/400x300?text=Traffic+Sources+Chart" alt="Pie chart showing distribution of traffic sources: organic search 45%, paid ads 30%, social media 15%, direct 10%" class="img-fluid">
                            </div>
                            <div class="mt-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <span class="badge bg-primary rounded-pill me-2"></span>
                                        <span>Organic Search</span>
                                    </div>
                                    <span>45%</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <span class="badge bg-success rounded-pill me-2"></span>
                                        <span>Paid Ads</span>
                                    </div>
                                    <span>30%</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <span class="badge bg-warning rounded-pill me-2"></span>
                                        <span>Social Media</span>
                                    </div>
                                    <span>15%</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <span class="badge bg-info rounded-pill me-2"></span>
                                        <span>Direct</span>
                                    </div>
                                    <span>10%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Campaigns List -->
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0">Active Campaigns</h5>
                                <button class="btn btn-sm btn-outline-primary">View All</button>
                            </div>
                            
                            <div class="list-group list-group-flush">
                                <div class="list-group-item campaign-item py-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                                                <i class="bi bi-facebook text-primary"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">Facebook Summer Sale</h6>
                                                <small class="text-muted">Started: 05/15/2023</small>
                                            </div>
                                        </div>
                                        <span class="badge bg-success rounded-pill">Running</span>
                                    </div>
                                    <div class="mt-2">
                                        <div class="d-flex justify-content-between mb-1">
                                            <small>Budget: $5,000</small>
                                            <small>Spent: $3,240</small>
                                        </div>
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-primary" style="width: 65%"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="list-group-item campaign-item py-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-info bg-opacity-10 p-2 rounded me-3">
                                                <i class="bi bi-google text-info"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">Google Search Brand</h6>
                                                <small class="text-muted">Started: 06/01/2023</small>
                                            </div>
                                        </div>
                                        <span class="badge bg-success rounded-pill">Running</span>
                                    </div>
                                    <div class="mt-2">
                                        <div class="d-flex justify-content-between mb-1">
                                            <small>Budget: $3,000</small>
                                            <small>Spent: $1,875</small>
                                        </div>
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-info" style="width: 62%"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="list-group-item campaign-item py-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-danger bg-opacity-10 p-2 rounded me-3">
                                                <i class="bi bi-instagram text-danger"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">Instagram Influencers</h6>
                                                <small class="text-muted">Started: 06/10/2023</small>
                                            </div>
                                        </div>
                                        <span class="badge bg-warning rounded-pill">Paused</span>
                                    </div>
                                    <div class="mt-2">
                                        <div class="d-flex justify-content-between mb-1">
                                            <small>Budget: $2,500</small>
                                            <small>Spent: $980</small>
                                        </div>
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-danger" style="width: 39%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Conversions -->
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0">Recent Conversions</h5>
                                <button class="btn btn-sm btn-outline-primary">View All</button>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Campaign</th>
                                            <th scope="col">Value</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://placehold.co/40x40" alt="User profile image" class="avatar me-2">
                                                    <span>Sarah Johnson</span>
                                                </div>
                                            </td>
                                            <td>Summer Sale</td>
                                            <td class="text-success">$129.99</td>
                                            <td>06/15/23</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://placehold.co/40x40" alt="User profile image" class="avatar me-2">
                                                    <span>Michael Chen</span>
                                                </div>
                                            </td>
                                            <td>New Collection</td>
                                            <td class="text-success">$89.50</td>
                                            <td>06/14/23</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://placehold.co/40x40" alt="User profile image" class="avatar me-2">
                                                    <span>Emma Williams</span>
                                                </div>
                                            </td>
                                            <td>Brand Awareness</td>
                                            <td class="text-success">$210.00</td>
                                            <td>06/13/23</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://placehold.co/40x40" alt="User profile image" class="avatar me-2">
                                                    <span>David Kim</span>
                                                </div>
                                            </td>
                                            <td>Summer Sale</td>
                                            <td class="text-success">$75.25</td>
                                            <td>06/12/23</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://placehold.co/40x40" alt="User profile image" class="avatar me-2">
                                                    <span>Lisa Rodriguez</span>
                                                </div>
                                            </td>
                                            <td>Limited Offer</td>
                                            <td class="text-success">$150.00</td>
                                            <td>06/11/23</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Performance Metrics -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Channel Performance</h5>
                            <div class="row">
                                <div class="col-md-3 mb-3 mb-md-0">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle mb-2">
                                            <i class="bi bi-facebook text-primary fs-4"></i>
                                        </div>
                                        <h5 class="mb-1">1,842</h5>
                                        <small class="text-muted">Engagements</small>
                                        <span class="text-success small mt-1"><i class="bi bi-arrow-up"></i> 12.5%</span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mb-md-0">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="bg-info bg-opacity-10 p-3 rounded-circle mb-2">
                                            <i class="bi bi-google text-info fs-4"></i>
                                        </div>
                                        <h5 class="mb-1">3,428</h5>
                                        <small class="text-muted">Clicks</small>
                                        <span class="text-success small mt-1"><i class="bi bi-arrow-up"></i> 8.3%</span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mb-md-0">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="bg-warning bg-opacity-10 p-3 rounded-circle mb-2">
                                            <i class="bi bi-instagram text-warning fs-4"></i>
                                        </div>
                                        <h5 class="mb-1">928</h5>
                                        <small class="text-muted">Engagements</small>
                                        <span class="text-danger small mt-1"><i class="bi bi-arrow-down"></i> 3.2%</span>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mb-md-0">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="bg-success bg-opacity-10 p-3 rounded-circle mb-2">
                                            <i class="bi bi-envelope text-success fs-4"></i>
                                        </div>
                                        <h5 class="mb-1">24.7%</h5>
                                        <small class="text-muted">Open Rate</small>
                                        <span class="text-success small mt-1"><i class="bi bi-arrow-up"></i> 2.8%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS for dashboard -->
    <script>
        // In a real implementation, you would add interactive functionality here
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Dashboard loaded');
            // You would typically initialize charts here
            // For example: initTrafficChart();
        });
    </script>
</body>
</html>
