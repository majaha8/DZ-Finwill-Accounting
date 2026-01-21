<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request a Quote - DZ Finwise</title>
    <style>
        /* All your existing CSS styles remain the same */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1a365d 0%, #2d5a8f 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .form-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 700px;
            width: 100%;
            padding: 3rem;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .form-header h1 {
            color: #1a365d;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            font-weight: 800;
        }

        .form-header p {
            color: #666;
            font-size: 1.1rem;
        }

        .form-header .highlight {
            color: #ff5722;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        label {
            display: block;
            color: #1a365d;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 0.9rem 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            font-family: 'Arial', sans-serif;
            transition: all 0.3s;
            background: #fafafa;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #ff5722;
            background: white;
            box-shadow: 0 0 0 3px rgba(255, 87, 34, 0.1);
        }

        select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%231a365d' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            padding-right: 2.5rem;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            width: 100%;
            background: #ff5722;
            color: white;
            padding: 1.1rem 2rem;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 1rem;
        }

        .submit-btn:hover {
            background: #e64a19;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 87, 34, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .required {
            color: #ff5722;
            margin-left: 3px;
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 2rem 1.5rem;
            }

            .form-header h1 {
                font-size: 2rem;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }
        }

        .success-message {
            display: none;
            background: #4caf50;
            color: white;
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .success-message.show {
            display: block;
        }
        
        .error-message {
            display: none;
            background: #f44336;
            color: white;
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }
        
        .error-message.show {
            display: block;
        }
        
        .loading {
            opacity: 0.7;
            cursor: not-allowed;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <div class="form-header">
            <h1>Request a <span class="highlight">Quote</span></h1>
            <p>Fill out the form below and we'll get back to you shortly</p>
        </div>

        <div class="success-message" id="successMessage">
            Thank you! Your quote request has been submitted successfully.
        </div>
        
        <div class="error-message" id="errorMessage">
            There was an error submitting your request. Please try again.
        </div>

        <!-- Update form action to point to PHP file -->
        <form id="quoteForm" action="process-quote.php" method="POST">
            <div class="form-row">
                <div class="form-group">
                    <label>First Name <span class="required">*</span></label>
                    <input type="text" name="firstName" placeholder="Enter first name" required>
                </div>

                <div class="form-group">
                    <label>Last Name <span class="required">*</span></label>
                    <input type="text" name="lastName" placeholder="Enter last name" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Work Email <span class="required">*</span></label>
                    <input type="email" name="workEmail" placeholder="your.email@company.com" required>
                </div>

                <div class="form-group">
                    <label>Company Email</label>
                    <input type="email" name="companyEmail" placeholder="info@company.com">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Phone <span class="required">*</span></label>
                    <input type="tel" name="phone" placeholder="+27 XX XXX XXXX" required>
                </div>

                <div class="form-group">
                    <label>Company Name <span class="required">*</span></label>
                    <input type="text" name="companyName" placeholder="Your Company (Pty) Ltd" required>
                </div>
            </div>

            <div class="form-group">
                <label>How can we help you? <span class="required">*</span></label>
                <select name="service" required>
                    <option value="">-- Select a Service --</option>
                    <option>Accounting & Bookkeeping</option>
                    <option>Tax Services</option>
                    <option>Payroll</option>
                    <option>Business Advisory</option>
                    <option>Company Registrations</option>
                    <option>Training & Workshops</option>
                    <option>Financial Statements</option>
                    <option>CIPC Annual Returns</option>
                    <option>Other</option>
                </select>
            </div>

            <div class="form-group">
                <label>Message <span class="required">*</span></label>
                <textarea name="message" placeholder="Please provide details about your requirements..." required></textarea>
            </div>

            <button type="submit" class="submit-btn" id="submitBtn">Submit Quote Request</button>
        </form>
    </div>

    <script>
       // Replace the JavaScript in your quote.php with this:
const form = document.getElementById('quoteForm');
const successMessage = document.getElementById('successMessage');
const errorMessage = document.getElementById('errorMessage');
const submitBtn = document.getElementById('submitBtn');

form.addEventListener('submit', async function(e) {
    e.preventDefault();
    
    // Disable submit button and show loading state
    submitBtn.disabled = true;
    submitBtn.classList.add('loading');
    submitBtn.innerHTML = 'Sending...';
    
    // Hide any previous messages
    successMessage.classList.remove('show');
    errorMessage.classList.remove('show');
    
    try {
        // Collect form data
        const formData = new FormData(this);
        const data = Object.fromEntries(formData);
        
        // First try PHP
        try {
            const response = await fetch('process-quote.php', {
                method: 'POST',
                body: formData
            });
            
            if (response.ok) {
                const result = await response.json();
                
                if (result.success) {
                    showSuccess(result.message);
                    return;
                }
            }
        } catch (phpError) {
            console.log('PHP failed, trying mailto fallback');
        }
        
        // Fallback to mailto
        const subject = `Quote Request from ${data.firstName} ${data.lastName} - ${data.companyName}`;
        const body = `
Name: ${data.firstName} ${data.lastName}
Work Email: ${data.workEmail}
Company Email: ${data.companyEmail || 'Not provided'}
Phone: ${data.phone}
Company: ${data.companyName}
Service: ${data.service}

Message:
${data.message}

Submitted: ${new Date().toLocaleString()}
        `;
        
        // Create mailto link
        const mailtoLink = `mailto:zulisi002@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
        
        // Show instructions
        showSuccess('Your browser will open your email client. Please send the pre-filled email to complete your request.');
        
        // Open email client after a short delay
        setTimeout(() => {
            window.open(mailtoLink, '_blank');
        }, 1000);
        
    } catch (error) {
        showError('Network error. Please check your connection and try again.');
    } finally {
        // Re-enable submit button after 3 seconds
        setTimeout(() => {
            submitBtn.disabled = false;
            submitBtn.classList.remove('loading');
            submitBtn.innerHTML = 'Submit Quote Request';
        }, 3000);
    }
});

function showSuccess(msg) {
    successMessage.textContent = msg;
    successMessage.classList.add('show');
    form.reset();
    window.scrollTo({ top: 0, behavior: 'smooth' });
    
    setTimeout(() => {
        successMessage.classList.remove('show');
    }, 10000);
}

function showError(msg) {
    errorMessage.textContent = msg;
    errorMessage.classList.add('show');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
    </script>

</body>
</html>