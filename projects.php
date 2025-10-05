<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devananthan - Web Developer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav>
        <div class="logo"><a href="/">Devfolio</a></div>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul class="nav-links" id="navLinks">
            <li><a href="index.html#about">ABOUT</a></li>
            <li><a href="index.html#experience">EXPERIENCE</a></li>
            <li><a href="index.html#skills">SKILLS</a></li>
            <li><a href="index.html#education">EDUCATION</a></li>
            <li><a href="index.html#blogs">BLOGS</a></li>
            <li><a href="projects.php">PROJECTS</a></li>
            <li><a href="index.html#contact">CONTACT</a></li>
        </ul>
    </nav>

    <!-- ==================== PROJECTS SECTION ==================== -->
    <section id="projects" class="container py-5" style="margin-top: 80px;">
        <div class="my-projects text-center mb-5">
            <h2>My Projects</h2>
            <p>Here are some of my featured works categorized by type.</p>
        </div>

        <!-- ==== Tabs ==== -->
        <ul class="nav nav-tabs justify-content-center mb-4" id="projectTabs" role="tablist">
            <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all"
                    type="button">All</button></li>
            <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#web" type="button">Web
                    Apps</button></li>
            <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#wordpress"
                    type="button">WordPress</button></li>
            <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#design"
                    type="button">Designs</button></li>
        </ul>

        <!-- ==== Tabs Content ==== -->
        <div class="tab-content" id="projectTabsContent">

            <!-- ===== ALL ===== -->
            <div class="tab-pane fade show active" id="all" role="tabpanel">
                <div class="row g-4">
                    <!-- Project 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1603791440384-56cd371ee9a7?w=800"
                                class="card-img-top" alt="Web App Dashboard">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Analytics Dashboard</h5>
                                <p class="card-text flex-grow-1">A responsive dashboard built with React and Chart.js.
                                </p>
                                <a href="#" class="btn btn-gradient mt-auto">View Project</a>
                            </div>
                        </div>
                    </div>
                    <!-- Project 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1581092334446-4c19f6afab09?w=800"
                                class="card-img-top" alt="Portfolio Website">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Portfolio Website</h5>
                                <p class="card-text flex-grow-1">Personal portfolio built using HTML, CSS, and JS
                                    animations.</p>
                                <a href="#" class="btn btn-gradient mt-auto">View Project</a>
                            </div>
                        </div>
                    </div>
                    <!-- Project 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1612831455543-49d1d4f1f6f2?w=800"
                                class="card-img-top" alt="Business WordPress Site">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Business WordPress Site</h5>
                                <p class="card-text flex-grow-1">A custom Elementor-based website for a local business.
                                </p>
                                <a href="#" class="btn btn-gradient mt-auto">View Project</a>
                            </div>
                        </div>
                    </div>
                    <!-- Project 4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1590608897129-79da98d159c7?w=800"
                                class="card-img-top" alt="E-commerce Store">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">E-commerce Store</h5>
                                <p class="card-text flex-grow-1">WooCommerce site with custom checkout and product
                                    filters.</p>
                                <a href="#" class="btn btn-gradient mt-auto">View Project</a>
                            </div>
                        </div>
                    </div>
                    <!-- Project 5 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1602526218831-09d0b36e8b10?w=800"
                                class="card-img-top" alt="UI UX Design Mockup">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">UI/UX Design Mockup</h5>
                                <p class="card-text flex-grow-1">Clean and minimalistic app design made in Figma.</p>
                                <a href="#" class="btn btn-gradient mt-auto">View Project</a>
                            </div>
                        </div>
                    </div>
                    <!-- Project 6 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?w=800"
                                class="card-img-top" alt="Logo & Branding">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Logo & Branding</h5>
                                <p class="card-text flex-grow-1">Visual identity design for a modern startup brand.</p>
                                <a href="#" class="btn btn-gradient mt-auto">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ===== WEB APPS ===== -->
            <div class="tab-pane fade" id="web" role="tabpanel">
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1603791440384-56cd371ee9a7?w=800"
                                class="card-img-top" alt="Analytics Dashboard">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Analytics Dashboard</h5>
                                <p class="card-text flex-grow-1">A dynamic dashboard for visualizing user data in real
                                    time.</p>
                                <a href="#" class="btn btn-gradient mt-auto">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1581092334446-4c19f6afab09?w=800"
                                class="card-img-top" alt="Portfolio Website">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Portfolio Website</h5>
                                <p class="card-text flex-grow-1">Interactive and animated personal site using modern
                                    JavaScript.</p>
                                <a href="#" class="btn btn-gradient mt-auto">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ===== WORDPRESS ===== -->
            <div class="tab-pane fade" id="wordpress" role="tabpanel">
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1612831455543-49d1d4f1f6f2?w=800"
                                class="card-img-top" alt="Business WordPress Site">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Business WordPress Site</h5>
                                <p class="card-text flex-grow-1">Corporate website using Elementor and custom widgets.
                                </p>
                                <a href="#" class="btn btn-gradient mt-auto">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1590608897129-79da98d159c7?w=800"
                                class="card-img-top" alt="E-commerce Store">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">E-commerce Store</h5>
                                <p class="card-text flex-grow-1">WooCommerce online store optimized for conversions.</p>
                                <a href="#" class="btn btn-gradient mt-auto">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ===== DESIGNS ===== -->
            <div class="tab-pane fade" id="design" role="tabpanel">
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1602526218831-09d0b36e8b10?w=800"
                                class="card-img-top" alt="UI UX Design Mockup">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">UI/UX Design Mockup</h5>
                                <p class="card-text flex-grow-1">High-fidelity mobile app UI prototype made with Figma.
                                </p>
                                <a href="#" class="btn btn-gradient mt-auto">View Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?w=800"
                                class="card-img-top" alt="Logo & Branding">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Logo & Branding</h5>
                                <p class="card-text flex-grow-1">Logo system and brand identity for a tech startup.</p>
                                <a href="#" class="btn btn-gradient mt-auto">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <footer>
        <p>&copy; 2025 Developed by Deva. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scripts.js"></script>


</body>

</html>