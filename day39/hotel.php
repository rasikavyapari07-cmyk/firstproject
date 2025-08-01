<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Horizon - Hotel Management System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2ecc71;
            --dark-color: #2c3e50;
            --light-color: #f8f9fa;
            --danger-color: #e74c3c;
            --warning-color: #f39c12;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
        }
        
        .sidebar {
            background-color: var(--dark-color);
            color: white;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
            transition: all 0.3s;
        }
        
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 5px;
            border-radius: 5px;
            padding: 10px 15px;
        }
        
        .sidebar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .sidebar .nav-link.active {
            background-color: var(--primary-color);
            color: white;
        }
        
        .sidebar .nav-link i {
            margin-right: 10px;
        }
        
        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s;
        }
        
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            border: none;
            transition: transform 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-header {
            background-color: white;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            font-weight: 600;
        }
        
        .stat-card {
            text-align: center;
            padding: 20px;
        }
        
        .stat-card .value {
            font-size: 2.5rem;
            font-weight: bold;
        }
        
        .stat-card .label {
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .available {
            color: var(--secondary-color);
        }
        
        .occupied {
            color: var(--danger-color);
        }
        
        .maintenance {
            color: var(--warning-color);
        }
        
        .room-card {
            position: relative;
            overflow: hidden;
        }
        
        .room-card img {
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .room-card:hover img {
            transform: scale(1.05);
        }
        
        .room-card .badge {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 0.8rem;
        }
        
        .room-card .price {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
        
        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
        }
        
        .table th {
            background-color: var(--dark-color);
            color: white;
        }
        
        .booking-form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        @media (max-width: 768px) {
            .sidebar {
                width: 0;
                overflow: hidden;
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .sidebar.show {
                width: 250px;
                z-index: 1000;
            }
        }
        
        .logo-img {
            height: 40px;
            margin-right: 10px;
        }
        
        /* Custom toast notification */
        .toast-custom {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1100;
        }
    </style>
</head>
<body>
    <!-- Sidebar Toggle Button (Mobile) -->
    <button class="btn btn-dark d-md-none position-fixed top-0 start-0 m-3" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>
    
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="d-flex align-items-center justify-content-center mb-4">
            <img src="https://placehold.co/40" alt="Grand Horizon Hotel Logo - Luxury hotel with modern design elements" class="logo-img">
            <h4 class="m-0">Grand Horizon</h4>
        </div>
        
        <nav class="nav flex-column">
            <a href="#" class="nav-link active">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-calendar-check"></i> Bookings
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-bed"></i> Rooms
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-users"></i> Guests
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-concierge-bell"></i> Services
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-file-invoice-dollar"></i> Payments
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-chart-line"></i> Reports
            </a>
            <a href="#" class="nav-link">
                <i class="fas fa-cog"></i> Settings
            </a>
            <div class="position-absolute bottom-0 w-100 mb-3">
                <a href="#" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </nav>
    </div>
    
    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Dashboard</h2>
            <div class="d-flex">
                <button class="btn btn-primary me-2">
                    <i class="fas fa-plus me-1"></i> New Booking
                </button>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle me-1"></i> Admin
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card stat-card bg-white">
                    <div class="card-body">
                        <div class="value">42</div>
                        <div class="label">Total Rooms</div>
                        <div class="mt-2">
                            <span class="available me-2"><i class="fas fa-circle me-1"></i> 28 Available</span>
                            <span class="occupied"><i class="fas fa-circle me-1"></i> 12 Occupied</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-white">
                    <div class="card-body">
                        <div class="value">18</div>
                        <div class="label">Current Guests</div>
                        <div class="mt-2">
                            <span><i class="fas fa-male me-1"></i> 12 Adults</span>
                            <span class="ms-2"><i class="fas fa-child me-1"></i> 6 Children</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-white">
                    <div class="card-body">
                        <div class="value">$8,420</div>
                        <div class="label">Today's Revenue</div>
                        <div class="mt-2">
                            <span class="text-success"><i class="fas fa-arrow-up me-1"></i> 12.5%</span> from yesterday
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-white">
                    <div class="card-body">
                        <div class="value">92%</div>
                        <div class="label">Occupancy Rate</div>
                        <div class="mt-2">
                            <span class="text-success"><i class="fas fa-arrow-up me-1"></i> 3.2%