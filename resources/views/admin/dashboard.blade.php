<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
   <link rel="stylesheet" href="{{ asset('css/admin_dashboard.css') }}">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard</h2>
        <a onclick="showSection('home')">Home</a>
        <a onclick="showSection('contacts')">Contact Us</a>
        <a onclick="showSection('testimonials')">Testimonials</a>
        <a onclick="showSection('blogs')">Blogs</a>
        <a href="{{ route('admin.logout') }}">Logout</a>
    </div>

    <!-- Content Area -->
    <div class="content">
        <!-- HOME SECTION -->
        <div id="home" class="section active">
            <img src="{{ asset('image/oz.webp') }}" alt="Logo">
        </div>

        <!-- CONTACT US SECTION -->
        <div id="contacts" class="section">
            <h2>Contact Us</h2>

            <div class="contact-container">
                <table class="contact-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>WhatsApp</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Sent At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->whatsapp }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>{{ $contact->created_at->format('d M Y, H:i') }}</td>
                            <td>
                                <a href="{{ route('admin.contact.delete', $contact->id) }}"
                                   onclick="return confirm('Are you sure you want to delete this contact?');"
                                   style="color: red;">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- TESTIMONIALS -->
       <div id="testimonials" class="section">
    <div class="testimonial-wrapper">

        <!-- ADD TESTIMONIAL -->
        <div class="testimonial-form">
            <h2>Add Testimonial</h2>

            @if(session('success'))
                <p style="color:green">{{ session('success') }}</p>
            @endif

            <form action="{{ route('admin.testimonial.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <input type="text" name="name" placeholder="Client Name" required>

                <input type="file" name="image" required>

                <textarea name="message" placeholder="Client message..." required></textarea>

                <button type="submit">Add Testimonial</button>
            </form>
        </div>

        <!-- ALL TESTIMONIALS -->
        <h3 style="margin-bottom:15px;">All Testimonials</h3>

        <div class="testimonial-grid">
            @foreach($testimonials as $t)
                <div class="testimonial-card">
                    <img src="{{ asset('uploads/testimonials/'.$t->image) }}">

                    <h4>{{ $t->name }}</h4>
                    <p>{{ $t->message }}</p>

                    <a href="{{ route('admin.testimonial.delete', $t->id) }}"
                       onclick="return confirm('Delete testimonial?')">
                        Delete
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</div>
        <!-- BLOGS -->
        <div id="blogs" class="section">
    <h2>Manage Blogs</h2>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <!-- Add Blog -->
    <form action="{{ route('admin.blog.store') }}"
          method="POST"
          enctype="multipart/form-data"
          style="max-width:500px; background:#f9f9f9; padding:20px; border-radius:8px;">

        @csrf

        <label>Title</label><br>
        <input type="text" name="title" required style="width:100%; padding:8px"><br><br>

        <label>Image</label><br>
        <input type="file" name="image" required><br><br>

        <label>Content</label><br>
        <textarea name="content" rows="5" required style="width:100%; padding:8px"></textarea><br><br>

        <button type="submit" style="padding:10px 20px;">Add Blog</button>
    </form>

    <hr style="margin:30px 0">

    <!-- All Blogs -->
    <h3>All Blogs</h3>

    <div style="display:grid; grid-template-columns: repeat(auto-fill,minmax(250px,1fr)); gap:20px;">
        @foreach($blogs as $blog)
        <div style="border:1px solid #ddd; padding:15px; border-radius:8px;">
            <img src="{{ asset('uploads/blogs/'.$blog->image) }}"
                 style="width:100%; height:150px; object-fit:cover; border-radius:6px">

            <h4>{{ $blog->title }}</h4>

            <a href="{{ route('admin.blog.delete', $blog->id) }}"
               onclick="return confirm('Delete this blog?')"
               style="color:red">Delete</a>
        </div>
        @endforeach
    </div>
</div>


    <!-- JS to switch sections -->
    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.section');
            sections.forEach(sec => sec.classList.remove('active'));
            document.getElementById(sectionId).classList.add('active');
        }
    </script>
</body>
</html>
