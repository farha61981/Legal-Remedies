 <?php
include("contactus.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <title>Law Remedies</title>
    <script>
        function login(){
            window.open("login-index.php");
        }
        function register(){
            window.open("registration.php");
        }
        function services(){
            window.open("services.php");

        }
        function contactus(){
            alert("Submitted successfully!")
            window.open("index.php");

        }
    </script>
   
</head>
<body>
        
        <nav class="navbar background  h-nav-resp" >
            <ul class="nav-list v-class-resp">
                <div class="logo"><img src="img/logo.jpeg" alt="logo"></div>
                <li> <a href="#"> Home</a></li>
                <li> <a href="#about us"> about us</a></li>
                <li> <a href="#Services" onclick="services()">Services</a></li>
                <li> <a href="#contact us">contact us</a></li>
        
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <!-- <div class="rightNav v-class-resp" >
                <input type="text" name="search" id="search">
                <button class="btn btn-sm">Search</button>
            
            </div> -->
            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
        <section class="background firstsection" id="about us">
            <div class="box-main">
                <div class="firsthalf">
             <bold><p class="text-big">The legal Remedies</p></bold><br>
                <p class="textsmall">Welcome to Legal Remedies, your trusted source for connecting with top legal professionals. Our platform is dedicated to
                providing you with comprehensive contact and professional details of experienced lawyers across various fields of law.
                Whether you need assistance with corporate law, family disputes, criminal defense, or any other legal matter, Legal
                Remedies ensures you have access to the best legal minds in the industry. Our user-friendly interface allows you to
                search for lawyers based on their expertise, location, and client reviews, making it easier than ever to find the right
                legal support tailored to your specific needs. Let Legal Remedies be your guide to finding reliable legal representation
                with confidence and ease. </p>
                <div class="buttons">
                    <button class="btn" onclick="login()">Login as Advocate</button>

                    <button class="btn" onclick="register()">Register as Advocate</button>
                </div>
                </div>
                <div class="secondhalf">
                    <img src="img/law.jpeg" alt="law image">
                </div>
            </div>
        </section>
<section class="section " >
<div class="paras">
    <p class="sectionTag text-big">Criminal lawyers</p>
    <p class="sectionSubTag text-small">A criminal lawyer prosecutes or defends individuals who are accused of committing crimes. The responsibilities of a criminal lawyer include research and case analysis to identify a likely result and create a winning courtroom defence plan for clients, assisting clients to grasp the meaning of the law and their legal alternatives, and pursuing a swift and favourable resolution of matters.</p>
</div>
<div class="thumnail">
<img src="img/criminallaw.jpg" alt="criminalimage" class="imgfluid">
</div>
</section>
<section class="section left ">
<div class="paras">
    <p class="sectionTag text-big">Civil lawyer</p>
    <p class="sectionSubTag text-small">A civil lawyers generally deals with legal disputes concerning personal injury, family relationships, employment and real estate. They also work with government entities and business institutions. Individuals, interpersonal ties, and property conflicts are frequently the centre of civil disputes. A civil lawyer attempts to settle problems and disagreements amongst the parties involved.
    </p>
</div>
<div class="thumnail">
<img src="img/civil.jpg" alt="civilimage" class="imgfluid">
</div>
</section>

<section class="section " >
<div class="paras">
    <p class="sectionTag text-big">Environmental lawyers</p>
    <p class="sectionSubTag text-small">Environmental lawyers ensure that companies and individuals follow environmental laws. Environmental lawyers are responsible for a wide range of duties, including drafting contracts and business agreements, including leases, licenses, purchase agreements, and partnership agreements, communicating with clients, witnesses, regarding case details and strategies, negotiating settlements on behalf of their clients in cases it involves environmental damage claims.
    </p>
</div>
<div class="thumnail">
<img src="img/envlaw.jpg" alt="env_image" class="imgfluid">
</div>
</section>
<section class="section left">
<div class="paras">
    <p class="sectionTag text-big">Family lawyers</p>
    <p class="sectionSubTag text-small">Family lawyers is a licensed legal practitioner who manages disputes among families. They deal in matters related to divorce, adoption, guardianship, and emancipation cases. They are responsible for overseeing family estates, monitoring mediation sessions, and offering legal advice.
    </p>
</div>
<div class="thumnail">
<img src="img/familylaw.jpg" alt="familyimage" class="imgfluid">
</div>
</section>
<section class="section ">
<div class="paras">
    <p class="sectionTag text-big">Corporate lawyers</p>
    <p class="sectionSubTag text-small">Corporate lawyers generally deal in commercial laws. They are responsible for ensuring business dealings adhere to corporate laws and rules. They generally work with law firms or companies’ legal teams. Corporate lawyers perform the following duties such as prepare the appropriate legal documents for trial or court proceedings, evaluate new business partnerships with vendors and subcontractors, represent the company in legal proceedings, design and oversee the company’s policy and position on legal matters, protect the company against legal risks and violations, etc.
    </p>
</div>
<div class="thumnail">
<img src="img/corporatelaw.jpg" alt="corporatelawimage" class="imgfluid">
</div>
</section>
<section class="section left">
<div class="paras">
    <p class="sectionTag text-big">Intellectual property lawyers</p>
    <p class="sectionSubTag text-small">Intellectual property lawyers perform wide range of duties like drafting contracts and non-disclosure agreements that protect client’s intellectual property rights, representing clients in court cases when needed, negotiating settlements with opposing counsel on behalf of clients.
    </p>
</div>
<div class="thumnail">
<img src="img/intellectualproperty.jpg" alt="intellectualpropertyimage" class="imgfluid">
</div>
</section>
<section class="section">
<div class="paras">
    <p class="sectionTag text-big">Tax lawyer</p>
    <p class="sectionSubTag text-small">Tax lawyers help their clients in resolving tax-related disputes. They may also work in the government sector or serve as corporate in-house counsel. They dispense the following legal duties such as to provide guidance on how to structurize the purchase and sale of a business by looking at the seller's debts, liabilities, finances and assets, monitor legislative developments and advise clients with respect to the potential impact of pending legislation on their businesses and their personal finances, etc.
    </p>
</div>
<div class="thumnail">
<img src="img/taxlawyer.jpg" alt="Taxlawyerimage" class="imgfluid">
</div>
</section>
<section class="section left">
<div class="paras">
    <p class="sectionTag text-big">Cyber lawyers</p>
    <p class="sectionSubTag text-small">Cyber lawyers deals with cases of cyber crimes like software piracy, hacking, cracking of software, credit card frauds, malfunction viruses, cyber-attacks & threats, etc. The main function of cyber lawyers is to investigate on a security breach violation, formulate reports to document security breaches and the degree of the damage caused, etc.
    </p>
</div>
<div class="thumnail">
<img src="img/cyberlawyers.jpg" alt="cyberimage" class="imgfluid">
</div>
</section>
<section class="section">
<div class="paras">
    <p class="sectionTag text-big">Estate planning lawyers</p>
    <p class="sectionSubTag text-small">Estate planning lawyers are experienced and licensed law professionals with a thorough understanding of the state and federal laws that affect how your estate will be valued, dispersed, and taxed after your death. In addition to educating you about the probate process, an estate planning attorney can assist you with the following tasks such as creating a will, designating your beneficiaries, establishing durable power of attorney and medical durable power of attorney, finding ways to reduce and avoid estate tax when possible, finding ways to avoid the probate court process etc.
    </p>
</div>
<div class="thumnail">
<img src="img/Estateplanninglawyers.jpg" alt="Estateplanninglawyers" class="imgfluid">
</div>
</section>
<section class="section left">
<div class="paras">
    <p class="sectionTag text-big">Worker's compensation lawyer</p>
    <p class="sectionSubTag text-small">Worker's compensation lawyers represent their clients involved in legal disputes regarding legal injuries sustained on the job, including both the workers and companies. They also negotiate settlements and ensure funds awarded by courts are actually paid. Worker's compensation lawyers may be called upon to argue on behalf of an injured worker seeking fair repayment or may defend companies in cases where someone is attempting to dishonestly take advantage of the benefits system. In addition to this they may help clients by providing them with legal advice in an effort to determine whether or not to go to court and engaging in negotiations with the other side in the event that a settlement agreement seems possible.
    </p>
</div>
<div class="thumnail">
<img src="img/Worker'scompensationlawyer.jpg" alt="Worker'scompensationlawyer" class="imgfluid">
</div>
</section>
<section class="section">
<div class="paras">
    <p class="sectionTag text-big">Public interest lawyers</p>
    <p class="sectionSubTag text-small">Public interest lawyers work on a wide range of civil rights matters, including on issues involving discrimination based on race, ethnicity, or sexual orientation; gender issues; the rights of disabled people, whether involving physical or mental disabilities; or issues involving human rights abuses. Public interest lawyers also represent people facing eviction and homelessness, fighting for fair wages or to receive government benefits, and struggling with workplace issues. Survivors of domestic violence, people with family law or immigration issues, and people facing criminal proceedings (on probation or currently incarcerated) turn to public interest lawyers for assistance as well.

    </p>
</div>
<div class="thumnail">
<img src="img/publicinterest.jpg" alt="publicinterestimage" class="imgfluid">
</div>
</section>
<section class="section left">
<div class="paras">
    <p class="sectionTag text-big">Medical malpractice lawyers</p>
    <p class="sectionSubTag text-small">A medical malpractice attorney helps clients with claims regarding injuries they suffer due to mistakes made by doctors, nurses, dentists, therapists, technicians, and other medical professionals and health care providers. Those mistakes can include surgical errors, birth trauma, injuries from inappropriate treatment methods, misdiagnoses, unnecessary delays in treatment, or a failure to get proper consent for treatment from a patient.
    </p>
</div>
<div class="thumnail">
<img src="img/Medicalmalpractice.jpg" alt="Medicalmalpracticeimage" class="imgfluid">
</div>
</section>

</section>
<section class="section">
<div class="paras">
    <p class="sectionTag text-big">Labour lawyers</p>
    <p class="sectionSubTag text-small">A labor attorney assists clients with legal issues arising from the relationship between employers and employees. They interpret and advise clients on wage and working hour laws, workplace safety, laws regarding rest and breaks, disability and leave requirements, workplace harassment, discrimination, and wrongful termination. Labor attorneys can work for private firms, government agencies, labor unions, or on staff for companies, and can represent either employers or workers or both.
    </p>
</div>
<div class="thumnail">
<img src="img/Labourlawyers.jpg" alt="Labourlawyersimage" class="imgfluid">
</div>
</section>
<section class="section left">
<div class="paras">
    <p class="sectionTag text-big">Bankruptcy lawyers</p>
    <p class="sectionSubTag text-small">Bankruptcy attorneys specialize in helping their clients use the court system to reduce or eliminate debts, file for bankruptcy, or seek unpaid debts. They can work with individuals or with businesses, representing debtors, creditors, creditors’ committees, or bankruptcy trustees. Bankruptcy attorneys work in and out of the courtroom, either creating debt restructuring plans for debtors to help them relieve debts or trying to extract as much owed money as possible from debtors on behalf of creditors.
    </p>
</div>
<div class="thumnail">
<img src="img/Bankruptcylawyers.jpg" alt="Bankruptcylawyersimage" class="imgfluid">
</div>
</section>

<section class="section">
<div class="paras">
    <p class="sectionTag text-big">Immigration lawyers</p>
    <p class="sectionSubTag text-small">The roles and responsibilities of an immigration lawyer includes giving clients legal advice on a range of topics linked to both legal and illegal immigration is one of an immigration lawyer's job duties. He or she aids in completing legal requirements for the issuance of work permits and different visas, such as medical, tourist, and business visas. He or she offers assistance to foreign persons who are unsure about their legal Indian citizenship or who need visas to enter the country.
    </p>
</div>
<div class="thumnail">
<img src="img/Immigrationlawyers.jpg" alt="Immigrationlawyersimage" class="imgfluid">
</div>
</section>




<section class="contact" id="contact us">
    <h2 class="text-center">Contact Us</h2>
    <div class="form">
        <input class="form-input" type="text" name="name" id="name" placeholder="Enter your Name">
        <input class="form-input" type="phone" name="phone" id="name" placeholder="Enter your Phone">
        <input class="form-input" type="Email" name="email" id="name" placeholder="Enter yourEmail">
       <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Elaborate your concern"></textarea>
        <button  class="btn btn-sm btn-dark" name="btn-send" onclick="contactus()">Submit</button>
    </div>


<footer class="background">
    <p class="text-footer"><small>
         Made by Farha Kousar and Divya Shree R
    </small></p>
</footer>


<script src="js/resp.js"> </script>

</section>
</body>
</html> 