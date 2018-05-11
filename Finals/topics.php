<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("Location: login.php");
}
else
{
    ?>
<!DOCTYPE HTML>
<html>

<head>
  <title>webtech</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>
<?=$_SESSION['sess_user'];?><a href="logout.php">Logout</a>
<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Web Systems and Technologies</a></h1>
          <h2>Learn about how Web programming</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="topics.php">Topics</a></li>
          <li><a href="practice.php">Practice Quiz</a></li>
          <li> <a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
          <button class="accordion">Java Servlet</button>
                <div class="panel">
          <center><video width="400" height="300" controls>
            <source src="servletintro.mp4" type="video/mp4">
            <source src="servletintro.ogg" type="video/ogg">
              </video></center>
            <p>Reference: https://www.youtube.com/watch?v=CRvcm7GKrF0</p>
            <p>Introduction to Java Servlet</p>
                    <h2>What are Servlets?</h2>
<p> <strong>Servlets</strong> are Java Programs thay sits in a server and when a request comes, it will come into play.
	Servlets are mapped into the a URL. The term Servlets was coined from the word <strong>Java Applet</strong> which is a program that is usually
	sent as a separate file with an HTML page. Java Applets are usually used by running a client that can perform calculation for the client or user
	or it is used to position images based on the interaction of the user.</p>

<p>Java Servlets runs inside a container, it is an object that responds to an HTTP Request.</p>

	
<h2>Servlets Advantages to Common Gateway Interface</h2>
	<ol>
        <li>Performance is significantly better.</li>
		<li>Servlets execute within the address space of a Web server. It is not necessary to create a separate process to handle each client request.</li>
		<li>Servlets are platform-independent because they are written in Java.</li>
		<li>Java security manager on the server enforces a set of restrictions to protect the resources on a server machine. So servlets are trusted.</li>
		<li>The full functionality of the Java class libraries is available to a servlet. It can communicate with applets, databases, or other software via the sockets and RMI mechanisms that you have seen already.</li>

    </ol>

<h2>Servlets Packages</h2>
	<p> Servlets can be created using the <strong> javax.servlet</strong> and <strong>javax.servlet.http packages</strong> , which are a standard part of the Java's enterprise edition, an expanded version of the Java class library that supports large-scale development projects.
    </p>

	<h3> javax.servlet </h3>
	<ul>
		<li> Servlet, GenericServlet</li>
		<li> ServletRequest, ServletResponse </li>
		<li> ServletConfig, ServletContext </li>
		<li> RequestDispatcher </li>
	</ul>

	<h3> javax.servlet.http </h3>
	<ul>
		<li>HttpServlet </li>
		<li>HttpServletRequest</li>
		<li>HttpServletResponse </li>
		<li>HttpSession </li>
		<li>Cookie</li>
	</ul>

<h2>Servlets Tasks</h2>
<h3>Servlets can perform the following major tasks:</h3>
<ol>
    <li>Send the implicit HTTP response to the clients (browsers).</li>
    <li>Send the explicit data (i.e., the document) to the clients (browsers).</li>             
    <li>Read the explicit data sent by the clients (browsers).</li>           
    <li>Read the implicit HTTP request data sent by the clients (browsers).</li>           
    <li>Process the data and generate the results.</li>             
 </ol>           

<h2>Typical uses for HTTP Servlets:</h2>
	<ol>
		<li>Processing and/or storing data submitted by an HTML form.</li>
		<li>Providing dynamic content, e.g. returning the results of a database query to the client.</li>
		<li>Managing state information on top of the stateless HTTP, e.g. for an online shopping cart system which manages shopping carts for many concurrent customers and maps every request to the right customer</li>
	</ol>
		
<h2>Servlet Life Cycle</h2>
	<ol>
		<li>Load Servlet Class</li>
		<li>Create Instance of Servlet</li>
		<li>Call the servlets init() method</li>
		<li>Call the servlets service() method</li>
		<li>Call the servlets destroy() method</li>
	</ol>

<h2>HTTP Servlet Class Method:</h2>
	<ul>
		<li>doGet()</li>
		<li>doPost()</li>
		<li>doHead()</li>
		<li>doPut()</li>
		<li>doDelete()</li>
		<li>doOptions()</li>
		<li>doTrace()</li>
	</ul>

<h2> Servlet Processing </h2>
	<ul>
		<li>Client sends a request to a web server URL that is mapped to a servlet. Web server passes on the request to the servlet container</li> 
		<li>Servlet container checks if servlet is already loaded</li>
		<li>If it is not yet loaded, servlet container loads the servlet class and instantiates the servlet, and calls its init method. </li>
		<li>Servlet container invokes the servlet‟s service method, passing request and response objects as arguments </li>
		<li> Servlet processes the request using the response object to create the response, which is returned by the servlet container to the web server, which in turn sends the response to the client </li>
		<li>Subsequent request to the servlet will not require servlet re-instantiation, unless the servlet has been unloaded; before a servlet is unloaded, the servlet container invokes its destroy method. </li>
	</ul>
	
<h2> init(config) </h2>
	<ul>
	<li> Invoked once on the servlet by the servlet container when the servlet is instantiated; can be used by the servlet for one-time startup initialization  </li>
	</ul>
	
<h2> service(request, response) </h2>
	<ul>
		<li>Invoked each time the servlet is called upon to process a request (typically on a separate thread for each call)  </li>
		<li> In HttpServlet, the default Service implementation maps the call to a specific doXXX() method (e.g. doGet, doPost) which is typically overridden to affect the servlet‟s functionality </li>
	</ul>
	
<h2> Destroy() </h2>
	<ul>
		<li> Invoked on the servlet by the servlet container when the servlet is to be unloaded (e.g. when the application is stopped or undeployed); can be used by the servlet for clean-up processing (e.g. resource deallocation) </li>
	</ul>
	
<h2> Servlet Request Processing (HttpServletRequest)</h2>
	<ul>
		<li> Retrieving user-supplied request parameters </li>
		<li> Retrieving request header values </li>
	</ul>
	
<h2> Servlet Response Processing (HttpServletResponse)  </h2>
	<ul>
		<li> Setting response status code </li>
		<li> Setting response headers </li>
		<li>Obtaining output object for sending the response </li>
	</ul>
	
<h2> Servlet Request Dispatching (RequestDispatcher)  </h2>
	<ul>
	<li> Obtain a RequestDispatcher to a resource (static or dynamic) from the request object </li>
		<ul> 
		<li> RequestDispatcher rqstDsp; <br> rqstDsp = request.getRequestDispatcher(res); </li>
		</ul>
	
		<li> Include the dispatcher resource (or its output) in the current response; one or more resources can be included (e.g. use for banners, footers, etc.) </li>
		<ul> 
		<li> rqstDsp.include(request, response);  </li>
		</ul>
		
		<li> Forwards the processing of the current request to the dispatcher resource; the servlet processing the current request must not generate a response ( e.g. use in MVC “controller” servlets) </li>
		<ul>
		<li> rqstDsp.forward(request, response); </li>
		</ul>
		
		<li> Session Tracking(HttpSession)</li>
		<ul>
		<li> Session tracking support is implemented either cookies or URL-rewriting  </li>
		<li> Obtaining session object from the current request </li>
			<ul>
				<li> HttpSession session;  <br>
				session = request.getSession(createNew); </li>
			</ul>
		<li> Obtaining session information (HttpSession) </li>
			<ul> 
			<li> getCreationTime(), getLastAccessedTime(), getMaxInactiveInternal(), getId(), isNew(), setMaxInactiveInterval(int val)</li>
			</ul>
		<li> destroying sessions </li>
			<ul>
			<li> invalidate()</li>
			</ul>
		<li> URL-rewriting(HttpServletResponse) </li>
			<ul>
			<li> URL-rewriting(HttpServletResponse) </li>
			</ul>
		</ul>
	</ul>

<h2>Cookies in Servlets</h2>
<p><strong>Cookies</strong> are small pieces of informations that is persisted between multiple clients.</p>
<p>A cookie has the following:</p>
<ul>
	<li>Name</li>
	<li>Single Value</li>
	<li>Comment(optional)</li>
	<li>Path(optional)</li>
	<li>domain qualifiers(optional)</li>
	<li>Maximum Age</li>
	<li>Version Number</li>
</ul>

<h2>The following diagram shows how a cookie works.</h2>

<h2>Types of Cookies</h2>
<ul>
	<li>Persistent Cookie</li><p>- it is valid for multiple sessions, the cookie will only be removed once the user will logout or signout.</p>
	<li>Non-Persistent Cookie</li><p>- it is valid for only a single session, the cookie will be removed everytime the browser will be closed.</p>
</ul>
	
<h2>Advantages of Cookies</h2>
<ul>
	<li>It is a simple way to maintain the state of a website.</li>
	<li>It is maintained in the Client Side.</li>
</ul>

<h2>Disadvantages of Cookies</h2>
<ul>
	<li>If the cookie is disabled in the browser, it will not work.</li>
	<li>Textual Infromations are the once only that can be set in the object of the cookie.</li>
</ul>
	
<h2>Servlets Architecture</h2>
<h4>This Diagram shows the Architecture of the Servlets</h4>
      </div>
           <button class="accordion">PHP</button>
                <div class="panel">
            <center><video width="400" height="300" controls>
                <source src="phpintro.mp4" type="video/mp4">
            <source src="phpintro.mp4" type="video/ogg">
              </video></center>
             <p>Reference: https://www.youtube.com/watch?v=KL7_wZSTY6Y</p>
            <p>Introduction to PHP</p>
                    <h1>Introduction to PHP</h1>
		<p>PHP started out as a small open source project that evolved as more and more people
		found out how useful it was. Rasmus Lerdorf unleashed the first version of PHP way back
		in 1994. The PHP Hypertext Preprocessor (PHP) is a programming language that allows web developers to create dynamic content that interacts with databases. PHP is basically used for developing web based software applications. </p>
	<ul>
		<li>PHP is a server side scripting language that is embedded in HTML. It is used to
			manage dynamic content, databases, session tracking, even build entire ecommerce sites. </li>
		<li> It is integrated with a number of popular databases, including MySQL, PostgreSQL,
			Oracle, Sybase, Informix, and Microsoft SQL Server. </li>
		<li>PHP is pleasingly zippy in its execution, especially when compiled as an Apache
			module on the Unix side. The MySQL server, once started, executes even very
			complex queries with huge result sets in record-setting time. </li>
		<li> PHP supports a large number of major protocols such as POP3, IMAP, and LDAP.
			PHP4 added support for Java and distributed object architectures (COM and CORBA), making n-tier development a possibility for the first time. </li>
		<li>PHP Syntax is C-Like</li>
	</ul>
                    <p>Instead of lots of commands to output HTML (as seen in C or Perl), PHP pages contain HTML with embedded code that does "something" (in this case, output "Hi, I'm a PHP script!"). The PHP code is enclosed in special start and end processing instructions  that allow you to jump into and out of "PHP mode."</p>
	<p>What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server, generating HTML which is then sent to the client. The client would receive the results of running that script, but would not know what the underlying code was. You can even configure your web server to process all your HTML files with PHP, and then there's really no way that users can tell what you have up your sleeve.</p>

	<h1> Superglobals of PHP </h1>
		<p>Superglobals — Superglobals are built-in variables that are always available in all scopes</p>
		<table>
			<th> Variable</th>
			<th> Description </th>
		<tr>
			<td>$GLOBALS</td>
			<td>Contains a reference to every variable which is currently available within the global scope of the script. The keys of this array are the
				names of the global variables.</td>
		</tr>
		<tr>
			<td>$_SERVER</td>
			<td>This is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web
			server. There is no guarantee that every web server will provide any of these. </td>
		</tr>
		<tr>
			<td>$_GET</td>
			<td>An associative array of variables passed to the current script via the HTTP GET method.</td>
		</tr>
		<tr>
			<td>$_POST</td>
			<td>An associative array of variables passed to the current script via the HTTP POST method.</td>
		</tr>
		<tr>
			<td>$_FILES</td>
			<td>An associative array of items uploaded to the current script via the HTTP POST method.</td>
		</tr>
		<tr>
			<td>$_REQUEST</td>
			<td>An associative array consisting of the contents of $_GET, $_POST, and $_COOKIE.</td>
		</tr>
		<tr>
			<td>$_COOKIE </td>
			<td>An associative array of variables passed to the current script via HTTP cookies.</td>
		</tr>
		<tr>
			<td>$_SESSION </td>
			<td>An associative array containing session variables available to the current script.</td>
		</tr>
		<tr>
			<td>$_PHP_SELF </td>
			<td>A string containing PHP script file name in which it is called.</td>
		</tr>
		<tr>
			<td>$php_errormsg</td>
			<td>$php_crrormsg is a variable containing the text of the last error message generated by PHP.</td>
		</tr>
		</table>
	<h1> Starting a PHP Session</h1>
		
		<p>A PHP session is easily started by making a call to the session_start() function. This
		function first checks if a session is already started and if none is started, then it starts one. It is recommended to put the call to <b>session_start()</b> at the beginning of the page.
		<b>Session variables</b> are stored in associative array called <b>$_SESSION[].</b> These variables can be accessed during lifetime of a session.
			The following example starts a session and then registers a variable called counter that is incremented each time the page is visited during the session.
			Make use of<b> isset()</b> function to check if session variable is already set or not.
		</p>
		<p>It will produce the following line:</p>
		
	<h1>PHP opening and closing Tags syntax</h1>
			<p><Strong>4</Strong> different pairs of opening and closing tag for PHP</p>
              <ol>
				<li>Default syntax</li>
				<p>he default syntax starts with <strong>"&lt?" php" and ends with "?/&gt".</strong></p>
				<li>Short open Tags</li>
				<p>The short tags starts with <strong> &lt?" and ends with "?&gt</strong></p>
				<li>HTML Script Tags</li>
				<li>ASP Style Tags</li>
				<p>The ASP style tags starts with "<strong>&lt%" and ends with "&gt</strong>"</p>
			</ol>
				<strong><p>Rules for statement separation</p></strong>
			<ol>
				<li>a semicolon</li>
				<li>AND/OR</li>
				<li>a closing PHP tag</li>
			</ol>
		<h1>Destroying a PHP Session </h1>
		<img src="images/php4.png" alt="my-image"/>
		<p>The Session_destroy() function in PHP destroys all the data associated with the current session. However, it does not unset any of the global variables associated with the session nor does it unset the session cookie. It is often used in conjunction with session_unset() to more thoroughly remove the session.</p>
        </div>

           <button class="accordion">Node JS</button>
                <div class="panel">
                     <center><video width="400" height="300" controls>
                <source src="nodejsintro.mp4" type="video/mp4">
            <source src="nodejsintro.mp4" type="video/ogg">
              </video></center>
                    <p>Reference: https://www.youtube.com/watch?v=65a5QQ3ZR2g </p>
                    <p>Introduction to Node.js </p>
                    <h1> What is Node.js? </h1>
			<br>
			<p> Node.js is a runtime environment for building fast and scalable network applications easily with JavaScript. Node.js uses an event driven, non blocking I/O model that makes it lightweight and efficient, perfect for data intensive real time applications that run across distributed devices. It  provides a rich library of various JavaScript modules which simplifies the development of web applications using Node.js to a great extent.</p>
	
	
		<h1> Features </h1>
			 Asynchronous and Event driven
			<p> The APIs of Node.js is non-blocking. A Node.js server based will never wait for any of the API to return certain data. The server moves to the next API after calling it and a notification mechanism of Events of Node.js helps the server to get a response from the previous API call. </p>
			
			Very Fast 
			<p> Node.js library is fast in code execution.</p>
			
			Single threaded but highly Scalable
			<p>Node.js uses a single threaded program and the same program can provide service to a much larger number of requests than traditional servers like Apache HTTP Server.
</p>
		No Buffering
			<p> The Node.js applications does not buffer any data and it just give the output of the data.</p>
			
			 License 
			<p> Node.js is under the MIT license.</p>
		

		<h1> Environment Setup</h1>
			
			Local Environment Setup
			<p> You need the Text Editor and Node.js binary installables softwares for you to setup the environment for Node.js.</p>
			
			Text Editor
			<p> This is where you will type your program for the Node.js.  Examples of few editors include Windows Notepad, OS Edit command, Brief, Epsilon, EMACS, and vim or vi. <br> The files you create with your editor are called source files and contain program source code. The source files for Node.js programs are typically named with the extension ".js". <br>
</p>
			Executing a File
			<p> After you have installed the Node.js, create a file that is named with the extension ".js". For example, in a file named index.js type the code : console.log("Hello Node.js") <br>
			Now if you run the file using Node.js you will be able to see the output with the code : $ node index.js
			</p>
		
		<h2> Creating your First Application <h2>
			<p> The Node.js has three main components for you to actually create an application. We use the require directive to load Node.js modules, Apache HTTP Server for creating servers, and read request and return request that will read the HTTP request made by the client which can be a browser or a console and return the response.
			</p>
		
			Step 1 
			<p> Import Required Module - we use the require directive <br>
			var http = require("http");
			</p>
			
			Step 2
			<p> Create Server - 
		 we use the created http instance from the first step and call the  http.createServer() method and bind it with a port like at port 8081 using the listen method. <br>
				http.createServer(function (request, response) { <br>
				// Send the HTTP header     <br>
				// HTTP Status: 200 : OK <br>  
				// Content Type: text/plain <br>    
				response.writeHead(200, {'Content‐Type': 'text/plain'}); <br>         // Send the response body as "Hello NodeJS" <br>   
				response.end('Hello NodeJS\n');  }).listen(8081); <br>
// Console will print the message <br> 
				console.log('Server running at http://localhost:8081/');<br>
			</p>
			
			Step 3 
			 <p> Testing Request and Response - put the import required module and created server in a file named index.js then run the code in your Node.js command prompt : node main.js
			</p>
		
		
		<p> Now you will be able to create an application were you will be able to see the result in the web browser with the your localhost and the port you have provided in the code of your created server.</p>
	
          </div>
                    </h2>
          </div>
          <button class="accordion">Java Server Page(JSP)</button>
                <div class="panel">
                    <h1>JSP</h1>
<ul>
<li>Java Server Pages (JSP) is a server-side programming technology that enables the creation of dynamic, platform-independent method for building Web-based applications. JSP have access to the entire family of Java APIs, including the JDBC API to access enterprise databases. This tutorial will teach you how to use Java Server Pages to develop your web applications in simple and easy steps.</li>

<li>JavaServer Pages (JSP) is a technology for developing Webpages that supports dynamic content. This helps developers insert java code in HTML pages by making use of special JSP tags, most of which start with <% and end with %>.</li>

<li>A JavaServer Pages component is a type of Java servlet that is designed to fulfill the role of a user interface for a Java web application. Web developers write JSPs as text files that combine HTML or XHTML code, XML elements, and embedded JSP actions and commands.</li>

<li>JSP tags can be used for a variety of purposes, such as retrieving information from a database or registering user preferences, accessing JavaBeans components, passing control between pages, and sharing information between requests, pages etc.</li>
</ul>
<h1> Why use JSP? </h1>
<ul>
<li>Performance is significantly better because JSP allows embedding Dynamic Elements in HTML Pages itself instead of having separate CGI files.</li>
<li>JSP are always compiled before they are processed by the server unlike CGI/Perl which requires the server to load an interpreter and the target script each time the page is requested.</li>
<li>JavaServer Pages are built on top of the Java Servlets API, so like Servlets, JSP also has access to all the powerful Enterprise Java APIs, including JDBC, JNDI, EJB, JAXP, etc.</li>
<li>JSP pages can be used in combination with servlets that handle the business logic, the model supported by Java servlet template engines</li>
</ul>



<h1>JSP Standard Actions </h1>
<table>
	<th>Syntax</th>
	<th>Purpose</th>
<tr>
<td>jsp:include</td>
<td>Includes a file at the time the page is requested.</td>
</tr>
<tr>
<td>jsp:useBean</td>
<td>Finds or instantiates a JavaBean.</td>
</tr>
<tr>
<td>jsp:setProperty</td>
<td>Sets the property of a JavaBean.</td>
</tr>
<tr>
<td>jsp:getProperty</td>
<td>Inserts the property of a JavaBean into the output.</td>
</tr>
<tr>
<td>jsp:forward</td>
<td>Forwards the requester to a new page</td>
</tr>
<tr>
<td>jsp:plugin</td>
<td>Generates browser-specific code that makes an OBJECT or EMBED tag for the Java plugin.</td>
</tr>
<tr>
<td>jsp:element</td>
<td>jsp:attribute</td>
</tr>
<tr>
<td>jsp:body</td>
<td>Defines dynamically-defined XML element's body.</td>
</tr>
<tr>
<td>jsp:text</td>
<td>Used to write template text in JSP pages and documents.</td>
</tr>
</table>



<h1>JSTL </h1>
<p>JSTL has support for common, structural tasks such as iteration and conditionals, tags for manipulating XML documents, internationalization tags, and SQL tags. It also provides a framework for integrating the existing custom tags with the JSTL tags.</p>

<h2> Classificication of JSTL Tags </h2>
<ol type="A">
<li>Core Tags </li>
<li>Formatting Tags </li>
<li> SQL Tags </li>
<li> XML Tags </li>
<li>JSTL Functions </li>
	
	
<ul>
<li> Motivation</li>
	<ul>
	<li> Separate business logic from presentation concern </li>
		<ul>
		<li> Allows modern web development teams to be divided up into programmers and web page authors / designers </li>
			<li> Fosters component reuse (e.g. the same data object can be consumed by user agents of varying capabilities and needs) </li>
		</ul>
	<li> Servlets can be very powerful for programming business logic, but are very awkward to use when generating static (i.e. template) content.  </li>	
		<li> (X)HTML marked-up documents are very convenient for static content generation but cannot be used to program business logic (or generate dynamic content arising from data produced by the business logic). </li>
	</ul>
	<li> Features </li>
	<ul>
	<li> Text-based document capable of generating both static and dynamic content (typically intermixed) </li>
		<li>	Mark-up based document syntax (JSP-style or XML-style), combining (X) HTML elements as well as standard and custom JSP elements; thus, web page authors can feel right “at home” with the mark-up syntax.</li>
		<li> Embedded Java Coding support via “scriptlets”  </li>
		<ul>
	<li> "<%  %>" </li>	
		</ul>
	<li>Template text are converted into JSPWriter  </li>
	</ul>
	<li> Components</li>
	<ul>
	<li> Template (i.e. static) text </li>
		<li> JSP elements</li>
		<ul>
		<li> Directives </li>
			<ul>
			<li>" <%@ page ContentType=”text/html” pageEncoding=”UTF-8” %> "</li>
				<li> "<%@ page import=”java.util.Random” %> "</li>
						<ul>
							<li>autoFlush </li>
							 <li>buffer </li>
							 <li>contentType </li>
							 <li>errorPage </li>
							 <li>extends </li>
							 <li>import </li>
							 <li>info </li>
							 <li>isELIgnored</li> 
							 <li>isErrorPage </li>
							 <li>isThreadSafe </li>
							 <li>language </li>
							<li>pageEncoding o session</li> 
					</ul>
				<li> "<%@ taglib uri=”http://java.sun.com/jsp/jstl/core” prefix=”c” %> "</li>
					<ul>
						<li>prefix </li> 
						 <li>taglib </li> 
						 <li>uri </li> 
					</ul>
						
			</ul>
		<li> Scripting Elements</li>
			<ul>
			<li> Declarations</li>
				<ul>
					<li>"<%! int a = 100; %>" </li>
					<li> "<%! int square(int n) { return n*n ; } %>" </li>
					</ul>
			<li> Expressions </li>
				<ul>
				<li> "<% for(int i = 0; i < 10 ; i++) { out.println(i); } %> "</li>
				</ul>
				</ul>
			
		</ul>
	</ul>
</ul>
                    </ol>
          </div>
        </div>
    </div>
    <div id="footer">
      <p>Web system and technology | 2018</p>
    </div>
  </div>
    <script>
    var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
    </script>
</body>
</html>
<?php   
    }
?>