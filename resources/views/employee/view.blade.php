<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>RushPoint IT Solutions | Web Development, API, AI & Process Automation</title>
  <meta name="title" content="RushPoint IT Solutions">
  <meta name="description" content="RushPoint IT Solutions delivers cutting-edge technology services including Web Development, API Integration, AI Development, RPA, HRIS, and Inventory Systems. Helping businesses innovate, automate, and scale with reliable IT solutions.">
  <meta name="keywords" content="RushPoint, RushPoint IT Solutions, Web Development, API Integration, AI Development, Process Automation, RPA, HRIS, Inventory Management, POS, Cloud Solutions, IT Services Philippines">
  <meta content="Renz Cabato" name="author">
  <meta name="robots" content="index, follow">
  <!-- Favicons -->
  <link href="https://rushpoint.com.ph/favicon.png" rel="icon">
  <link href="https://rushpoint.com.ph/favicon.png" rel="apple-touch-icon">

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://rushpoint.com.ph/">
  <meta property="og:title" content="RushPoint IT Solutions">
  <meta property="og:description" content="RushPoint IT Solutions empowers businesses with smart technology solutions—Web Development, AI, API, RPA, and automation.">
  <meta property="og:image" content="https://rushpoint.com.ph/assets/img/header_2.png">
  

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "RushPoint IT Solutions",
  "url": "https://rushpoint.com.ph/",
  "logo": "https://rushpoint.com.ph/favicon.png",
  "sameAs": [
    "https://www.facebook.com/RushPointITSolutions",
    "https://www.linkedin.com/company/rushpoint-it-solutions"
  ]
}
</script>
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        :root {
            --theme: #fe790d;
        }

        body {
            margin: 0;
            background: #f5f5f5;
            font-family: "Inter", sans-serif;
        }

        .top-bar {
            background: var(--theme);
            width: 100%;
            height: 180px;
        }

        .profile-card {
            width: 90%;
            max-width: 420px;
            margin: -80px auto 0;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            padding: 30px 20px;
            text-align: center;
        }

        .avatar-wrapper {
            position: relative;
            margin-top: -90px;
        }

        .avatar {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 4px solid #fff;
            object-fit: cover;
            display: block;
            margin: 0 auto;
        }

        h2 {
            margin: 10px 0 5px;
            font-size: 1.6rem;
            font-weight: 700;
        }

        .position {
            font-size: 0.9rem;
            font-weight: 600;
            color: #888;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        /* INFO SECTION */
        .info-box {
            text-align: left;
            margin: 20px auto;
            max-width: 320px;
            color: #444;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 8px 0;
        }

        .info-item .material-icons {
            font-size: 22px;
            color: var(--theme);
        }

        .status-active {
            color: green;
            font-weight: 700;
        }

        .status-inactive {
            color: red;
            font-weight: 700;
        }

        .action-buttons {
            margin-top: 25px;
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .act-btn {
            background: var(--theme);
            padding: 12px 22px;
            border-radius: 25px;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 0.95rem;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            transition: 0.2s ease-in-out;
        }

        .act-btn:hover {
            transform: scale(1.05);
        }
    </style>

</head>
<body>

    <!-- Top Banner -->
    <div class="top-bar"></div>

    <!-- Profile Card -->
    <div class="profile-card">

        <div class="avatar-wrapper">
            <img src="{{asset($employee->avatar)}}" class="avatar">
        </div>

        <h2 id="name">{{$employee->name}}</h2>
        <div class="position" id="position">{{$employee->position}}</div>

        <!-- INFO SECTION -->
        <div class="info-box">

            <div class="info-item">
                <span class="material-icons">email</span>
                <span><b>Email:</b> {{$employee->email}}</span>
            </div>

            <div class="info-item">
                <span class="material-icons">phone</span>
                <span><b>Number:</b> {{$employee->number}}</span>
            </div>

            <div class="info-item">
                <span class="material-icons">verified_user</span>
                <span><b>Status:</b> <span class="status-active">{{$employee->status}}</span></span>
            </div>

        </div>

        <div class="action-buttons">
            <button class="act-btn" onclick="downloadVCard()">
                Add to Your Contacts
            </button>
        </div>
    </div>

 <script>
async function downloadVCard() {
    const fullName = document.getElementById('name').innerText.trim();
    const position = document.getElementById('position').innerText;
    const email = "{{ $employee->email }}";
    const company = "{{ $employee->company ?? 'Company' }}";
    const phone = "{{ $employee->number }}";
    const avatarUrl = "{{ asset($employee->avatar) }}";

    // Convert image to Base64
    async function imageToBase64(url) {
        const response = await fetch(url);
        const blob = await response.blob();
        return new Promise((resolve) => {
            const reader = new FileReader();
            reader.onloadend = () => resolve(reader.result.split(',')[1]);
            reader.readAsDataURL(blob);
        });
    }

    const photoBase64 = await imageToBase64(avatarUrl);

    const parts = fullName.split(" ");
    const firstName = parts[0] || "";
    const lastName = parts.slice(1).join(" ") || "";

    // MUST use CRLF for iPhone
    const vcard =
"BEGIN:VCARD\r\n" +
"VERSION:3.0\r\n" +
"N:" + lastName + ";" + firstName + ";;;\r\n" +
"FN:" + fullName + "\r\n" +
"TITLE:" + position + "\r\n" +
"EMAIL;TYPE=INTERNET:" + email + "\r\n" +
"ORG:" + company + "\r\n" +
"TEL;TYPE=CELL:" + phone + "\r\n" +
"PHOTO;ENCODING=b;TYPE=JPEG:" + photoBase64 + "\r\n" +
"END:VCARD";

    // ✔ iPhone auto-opens Contacts
    if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
        const base64 = btoa(unescape(encodeURIComponent(vcard)));
        const url = "data:text/x-vcard;base64," + base64;
        window.location.href = url;
        return;
    }

    // ✔ Android auto-opens Contacts using Intent
    if (/Android/i.test(navigator.userAgent)) {
        const blob = new Blob([vcard], { type: "text/x-vcard" });
        const blobUrl = URL.createObjectURL(blob);

        const intentUrl =
            "intent://" +
            encodeURIComponent(blobUrl) +
            "#Intent;scheme=content;type=text/x-vcard;end";

        window.location.href = intentUrl;
        return;
    }

    // ✔ Desktop fallback (normal download)
    const blob = new Blob([vcard], { type: "text/vcard" });
    const url = URL.createObjectURL(blob);

    const link = document.createElement("a");
    link.href = url;
    link.download = fullName + ".vcf";
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);

    URL.revokeObjectURL(url);
}
</script>
</body>
</html>
