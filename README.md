# IIUC BUS MANAGEMENT SYSTEM

***Software Project Report IIUC Bus Management System***

Course Code: CSE-3640 Course Title: Software Development II

![assets/image1.png](assets/image1.png)

Department of Computer Science and Engineering

**Table of Contents**

[I Project Description 7](about:blank#project-description)

[1 Project Overview (Introduction) 7](about:blank#project-overview-introduction)

[2 The Purpose of the Project 7](about:blank#the-purpose-of-the-project)

[2a The User Business or Background of the Project Effort 7](about:blank#the-user-business-or-background-of-the-project-effort)

[2b Goals of the Project 7](about:blank#goals-of-the-project)

[2c Measurement 8](about:blank#measurement)

[3 The Scope of the Work 8](about:blank#the-scope-of-the-work)

[3a The Context of the Work 9](about:blank#the-context-of-the-work)

[3b Work Partitioning 10](about:blank#work-partitioning)

[3c Competing Products 10](about:blank#competing-products)

[4 Stakeholders 11](about:blank#stakeholders)

[5 Mandated Constraints 12](about:blank#mandated-constraints)

[5a Partner or Collaborative Applications 12](about:blank#partner-or-collaborative-applications)

[5b Anticipated Workplace Environment 13](about:blank#anticipated-workplace-environment)

[5c Schedule Constraints 14](about:blank#schedule-constraints)

[5d Budget Constraints 14](about:blank#budget-constraints)

[6 Naming Conventions and Definitions 15](about:blank#naming-conventions-and-definitions)

[6a Definitions of Key Terms 15](about:blank#definitions-of-key-terms)

[6b UML and Other Notation Used in This Document 15](about:blank#uml-and-other-notation-used-in-this-document)

[II Requirements 16](about:blank#requirements)

[Activity Diagram: 16](about:blank#activity-diagram)

[1 Product Use Cases 17](about:blank#product-use-cases)

[1a Use Case Diagrams 17](about:blank#use-case-diagrams)

[1b Product Use Case List 18](about:blank#product-use-case-list)

[2 Functional Requirements 18](about:blank#functional-requirements)

[3 Hardware and Software requirements 19](about:blank#hardware-and-software-requirements)

[Hardware Requirements: 19](about:blank#hardware-requirements)

[Software Requirements: 19](about:blank#software-requirements)

[4 Data Requirements 20](about:blank#data-requirements)

[5 Performance Requirements 20](about:blank#performance-requirements)

[5a Speed and Latency Requirements 20](about:blank#speed-and-latency-requirements)

[5b Precision or Accuracy Requirements 21](about:blank#precision-or-accuracy-requirements)

[5c Capacity Requirements 21](about:blank#capacity-requirements)

[6 Dependability Requirements 22](about:blank#dependability-requirements)

[6a Reliability Requirements 22](about:blank#reliability-requirements)

[6b Availability Requirements 22](about:blank#availability-requirements)

[6c Robustness or Fault-Tolerance Requirements 23](about:blank#robustness-or-fault-tolerance-requirements)

[6d Safety-Critical Requirements 23](about:blank#safety-critical-requirements)

[7 Maintainability and Supportability Requirements 24](about:blank#maintainability-and-supportability-requirements)

[7a Maintenance Requirements 24](about:blank#maintenance-requirements)

[7b Scalability or Extensibility Requirements 24](about:blank#scalability-or-extensibility-requirements)

[7c Longevity Requirements 25](about:blank#longevity-requirements)

[8 Security Requirements 26](about:blank#security-requirements)

[8a Access Requirements 26](about:blank#access-requirements)

[8b Integrity Requirements 26](about:blank#integrity-requirements)

[8c Privacy Requirements 27](about:blank#privacy-requirements)

[9 Look and Feel Requirements 27](about:blank#look-and-feel-requirements)

[9a Appearance Requirements 27](about:blank#appearance-requirements)

[9b Style Requirements 28](about:blank#style-requirements)

[10 Cultural and Political Requirements 28](about:blank#cultural-and-political-requirements)

[10a Cultural Requirements 28](about:blank#cultural-requirements)

[10b Political Requirements 29](about:blank#political-requirements)

[11 Legal Requirements 29](about:blank#legal-requirements)

[11a Compliance Requirements 29](about:blank#compliance-requirements)

[III Design 30](about:blank#design)

[1 System Design 30](about:blank#system-design)

[1a Design goals 30](about:blank#design-goals)

[2 Followed Model / Approach 31](about:blank#followed-model-approach)

[3 Proposed Software Architecture 31](about:blank#proposed-software-architecture)

[3a Overview 31](about:blank#overview)

[3b Class Diagrams 32](about:blank#class-diagrams)

[3c DFD 33](about:blank#dfd)

[3d ERD 35](about:blank#erd)

[3e Normalization 36](about:blank#normalization)

[3f Use Case Diagram 40](about:blank#use-case-diagram)

[3g Schema Diagram 41](about:blank#schema-diagram)

[3h Activity Diagram 42](about:blank#activity-diagram-1)

[4 User Interface 43](about:blank#user-interface)

[Home Page (Non-Logged In) 43](about:blank#home-page-non-logged-in)

[Search Page (Non-Logged In) 43](about:blank#search-page-non-logged-in)

[Search Result Page (Non-Logged In) 44](about:blank#search-result-page-non-logged-in)

[Schedule Page (Non-Logged In) 44](about:blank#schedule-page-non-logged-in)

[Log In Page (Non-Logged In) 45](about:blank#log-in-page-non-logged-in)

[Sign Up Page (Non-Logged In) 45](about:blank#sign-up-page-non-logged-in)

[Sign Up Page (Non-Logged In) 46](about:blank#sign-up-page-non-logged-in-1)

[Home Page (Logged In) 46](about:blank#home-page-logged-in)

[Schedule Page (Logged In) 47](about:blank#schedule-page-logged-in)

[Search Page (Logged In) 47](about:blank#search-page-logged-in)

[Search Result (Logged In) 48](about:blank#search-result-logged-in)

[Bus Selection Page (Logged In) 48](about:blank#bus-selection-page-logged-in)

[Bus Selection Page (Logged In) 49](about:blank#bus-selection-page-logged-in-1)

[Notice Page (Logged In) 49](about:blank#notice-page-logged-in)

[Admin Panel Login 50](about:blank#admin-panel-login)

[Admin Dashboard (Hidden Side Panel) 50](about:blank#admin-dashboard-hidden-side-panel)

[Admin Dashboard (Showed Side Panel) 51](about:blank#admin-dashboard-showed-side-panel)

[Schedule Dashboard (Admin) 51](about:blank#schedule-dashboard-admin)

[Bus Dashboard (Admin) 52](about:blank#bus-dashboard-admin)

[Student Info Dashboard (Admin) 52](about:blank#student-info-dashboard-admin)

[Driver Info Dashboard (Admin) 53](about:blank#driver-info-dashboard-admin)

[Route Info Dashboard (Admin) 54](about:blank#route-info-dashboard-admin)

[Notice Info Dashboard (Admin) 55](about:blank#notice-info-dashboard-admin)

[IV Test Plans 56](about:blank#test-plans)

[1 Features to be tested / not to be tested 56](about:blank#features-to-be-tested-not-to-be-tested)

[2 Pass/Fail Criteria 56](about:blank#passfail-criteria)

[3 Approach 57](about:blank#approach)

[4 Suspension and resumption 57](about:blank#suspension-and-resumption)

[5 Testing materials (hardware / software requirements) 58](about:blank#testing-materials-hardware-software-requirements)

[6 Test cases 58](about:blank#test-cases)

[7 Testing schedule 59](about:blank#testing-schedule)

[V Feasibility Study 59](about:blank#feasibility-study)

[Project Introduction: 59](about:blank#project-introduction)

[Overview: 59](about:blank#_Toc123691800)

[Feasibility Study: 61](about:blank#feasibility-study-1)

[Technical Feasibility: 61](about:blank#_Toc123691802)

[Economical Feasibility: 61](about:blank#_Toc123691803)

[Legal Feasibility: 62](about:blank#_Toc123691804)

[Operational Feasibility: 62](about:blank#_Toc123691805)

[Scheduling Feasibility: 63](about:blank#_Toc123691806)

[VI Project Issues / Limitations 63](about:blank#project-issues-limitations)

[1 Open Issues 63](about:blank#open-issues)

[2 Risks 63](about:blank#risks)

[3 Costs 64](about:blank#costs)

[4 Project Retrospective 64](about:blank#project-retrospective)

[VII Conclusion 65](about:blank#conclusion)

[VIII Glossary 65](about:blank#glossary)

[IX References / Bibliography 66](about:blank#references-bibliography)

1. Project Description
    
    ## Project Overview (Introduction)
    

> Our project name is IIUC Bus Management System! This site is designed specifically for students and teachers of our university to easily access and view the bus schedules for the various bus routes that serve our campus. Whether you need to know when the next bus will arrive at your stop or you want to plan your commute to campus, this website has you covered. Simply select your route and view the schedule in real-time to plan your trip. We hope this website helps you get to and from campus with ease.
> 

## The Purpose of the Project

> The purpose of this project is to provide students and teachers with a convenient and easy-to-use platform for accessing the bus schedules of the university. By offering real-time information about bus arrival and departure times, the website helps students plan their commutes to and from campus more efficiently and effectively. Whether you rely on the bus as your primary means of transportation to campus or you just need to occasionally take the bus for certain trips, this website is a valuable resource for staying informed and organized. Overall, the purpose of the website is to make the process of using the university's bus services as simple and stress-free as possible for students.
> 

### The User Business or Background of the Project Effort

> This site is designed specifically for students and teachers of our university to easily access and view the bus schedules for the various bus routes that serve our campus. In addition to providing a convenient resource for students, the University Bus Schedules website can also benefit the university itself. By having accurate and up-to-date information about bus arrival and departure times readily available to students, the university can better manage its vehicle deployment and optimize its use of resources. For example, if the university knows that a particular bus route is consistently underutilized, it may decide to adjust the schedule or redirect those resources to other routes that have higher demand. This can help the university save on costs such as fuel and labor, as it can avoid running buses that are not needed or are only partially filled. Overall, the University Bus Schedules website can be an important tool for the university to efficiently and effectively manage its transportation resources.
> 

### Goals of the Project

> The goals of a bus management website can vary depending on the specific business model and target audience of the website. Some common goals of a travel website might include: Here are some potential goals for the University Bus Schedules website:
> 
- Provide students with real-time information about bus arrival and departure times
- Help students plan their commutes to and from campus more efficiently
- Serve as a convenient and easy-to-use resource for accessing bus schedules
- Help the university manage its vehicle deployment and optimize its use of resources
- Save the university money on fuel and labor costs by avoiding unnecessary bus runs
- Improve the overall convenience and ease of use of the university's bus services for students
    1. Measurement

> There are several ways in which the success and performance of the IIUC Bus Management System website could be measured:
> 
- **User engagement:** One way to measure the success of the website is by tracking how often students use it. If the website is widely used and visited by a significant number of students, it can be considered successful in terms of engagement.
- **User satisfaction:** Another important metric is user satisfaction. This can be measured through surveys or other means of feedback from students. If the majority of users report being satisfied with the website and finding it useful, it can be considered successful in terms of user satisfaction.
- **Resource optimization:** As mentioned earlier, one of the goals of the website is to help the university optimize its use of resources, such as fuel and labor. By tracking metrics such as the number of bus runs and the utilization rate of each route, the university can determine whether the website is helping to achieve this goal.
- **Cost savings:** If the website is successful in helping the university avoid unnecessary bus runs and optimize its vehicle deployment, it could lead to cost savings in the form of reduced fuel and labor expenses. These cost savings could be tracked and used as a measure of the website's performance.
- **User error rates:** Another way to gauge the performance of the website is by tracking the number of errors or issues that users encounter when using it. If the website has a low error rate, it can be considered a reliable and well-performing resource.
    
    ## The Scope of the Work
    

> The scope of work for a Bus Management System website can vary depending on the specific goals and needs of the website. Some common elements that may be included in the scope of work for a project like this might include:
> 
- **Website design and development:** This includes the creation of the overall look and feel of the website, as well as the layout and navigation structure.
- **Integration of real-time bus schedule data:** This involves connecting the website to the university's bus scheduling system and importing the current schedule data into the website in real-time.
- **Bus route and schedule management system:** This feature would allow the university to manage and update the bus schedules and routes through the website.
- **Commute planning tools:** This could include features such as a route planner that allows students to input their location and destination and view the best bus route to take, as well as a trip planner that helps students plan their entire commute from start to finish.
- **Feedback and survey tools:** These tools would allow students to provide feedback about the website and the bus services, and would help the university gather data about user satisfaction.
- **Security measures:** This could include measures such as encrypted data storage and user authentication to protect sensitive data and ensure the privacy of users.
- **Testing and quality assurance:** This involves thorough testing of the website to ensure it is reliable and performs well.
- **Maintenance and updates**: Ongoing maintenance and updates would be necessary to keep the website running smoothly and to add new features or fix any issues that arise.
    1. The Context of the Work

> The context of the IIUC Bus Management System project is the development of a website that provides students of the International Islamic University Chittagong (IIUC) with real-time information about the university's bus schedules and routes. The website will allow students to view the current bus schedules, plan their commutes to and from campus, and provide feedback about the bus services.
> 
> 
> The work for this project will include the design and development of the website, the integration of real-time bus schedule data, the creation of a system for managing bus routes and schedules, and the development of commute planning tools for students. It will also include the implementation of security measures to protect sensitive data and ensure the privacy of users, as well as testing and quality assurance to ensure the website is reliable and performs well.
> 
> The work for this project will not include the management of the university's bus services or the creation of new bus routes or schedules. These responsibilities will be outside the scope of the project.
> 
> The IIUC Bus Management System website will need to interact with the university's existing bus scheduling system in order to retrieve and display real-time schedule data. It will also need to interact with any feedback or survey tools that are implemented, in order to gather user satisfaction data. These interactions will involve retrieving and displaying data from these external systems, as well as potentially allowing users to input data or provide feedback through the website.
> 

### Work Partitioning

| Event Name | Input and Output | Summary |
| --- | --- | --- |
| User Entered Website | Search For Buses | Search for Data from Database |
| Bus Choice Method | User will select his preferred bus from the list of available routes | User Choses His/her Bus |
| Confirm Selection | User will be prompted for Log in if they want to select a bus for themselves | With Log in they can access this section |
| Access Live Panel | After selecting user can check the bus route time and number live | After access user can check in for further details |

### Competing Products

> It is uncommon for a university to have direct competition when it comes to its own internal services, such as its bus system. In the case of the IIUC Bus Management System, it seems that the website will be developed and run specifically by the university administration, rather than as a standalone product competing with other products or services.
> 
> 
> This means that the main focus of the website will be to provide a convenient and user-friendly resource for students to access and view the university's bus schedules and routes. The website may also be used as a tool by the university administration to manage and optimize its vehicle deployment and use of resources.
> 
> Since the IIUC Bus Management System does not have any direct competition, the main challenge will likely be to develop a website that meets the needs and expectations of the university's students and effectively fulfills the goals of the project. This could involve gathering feedback and conducting user testing to ensure that the website is user-friendly and meets the needs of the target audience.
> 

## Stakeholders

> There are several stakeholders for the IIUC Bus Management System website:
> 
- ***Students:** The main stakeholders for the website are the students of the university, who will be using the website to access and view the bus schedules and plan their commutes. Ensuring that the website meets their needs and expectations will be a key focus for the project.*
- ***University administration:** The university administration is also a stakeholder in the project, as they will be responsible for developing and maintaining the website. They will have a vested interest in ensuring that the website is effective and efficient in helping them manage the university's bus services and optimize their use of resources.*
- ***Bus drivers and other staff:** The bus drivers and other staff who work on the university's bus system will also be stakeholders in the project, as the website may impact their work and schedule. Ensuring that the website is accurate and up-to-date will be important for their job performance.*
- ***Other external stakeholders:** There may be other external stakeholders involved in the project, such as vendors or contractors who are providing services or resources to the project. It will be important to consider their needs and interests as well.*

> By taking into account the needs and concerns of all stakeholders, the developers and administrators of the IIUC Bus Management System website can work to create a successful and sustainable resource that meets the needs of all parties involved, including students, the university administration, bus drivers and staff, and any other external stakeholders.
> 

## Mandated Constraints

> There are various mandated constraints that the IIUC Bus Management System website may need to consider when developing and operating the website. Some examples of such:
> 
- ***Funding limitation:** One potential constraint for the IIUC Bus Management System website project could be a limitation on the funding available for the project. This could impact the scope of the work that can be done, as well as the resources that are available to the project team.*
- ***Proper hardware support:** Another constraint could be the availability of proper hardware support for the website. This might include sufficient server capacity to support the website, as well as any necessary hardware and software for the development and maintenance of the website.*
- ***Timeframe:** The project may have a specific timeframe within which it needs to be completed, which could impact the scope of the work that can be done and the resources available to the project team.*
- ***Regulatory requirements:** There may be certain regulatory requirements or guidelines that the project must comply with, such as privacy laws or accessibility standards. It will be important to ensure that the website meets these requirements in order to be successful.*
- ***Technical limitations:** There may be certain technical limitations that impact the project, such as the availability of certain tools or software, or the capabilities of the university's existing systems. These limitations will need to be taken into consideration when planning and executing the project.*
- ***Stakeholder expectations:** The needs and expectations of the various stakeholders involved in the project, such as students and the university administration, may also serve as constraints on the project. It will be important to consider and balance the needs of all stakeholders in order to achieve the desired outcomes.*
    1. Partner or Collaborative Applications

> The IIUC Bus Management System website may need to be compatible with a variety of external applications or systems in order to fulfill its goals. Some examples of potential partner or collaborative applications for the website will include
> 
- **University bus scheduling system:** The website will need to be able to retrieve and display real-time bus schedule data from the university's bus scheduling system. This may involve integrating with the system through an API or other means of data exchange.
- **Feedback and survey tools:** The website may include features for students to provide feedback about the bus services, such as a survey or rating system. These tools will need to be compatible with the website and be able to collect and display data in a meaningful way.
- **Student information system:** The website may need to be integrated with the university's student information system in order to authenticate users and retrieve relevant data such as student schedules or locations.
- **Maps and route planning tools:** The website may include features for students to plan their commutes, such as a route planner or map interface. These tools may be provided by external applications or systems that the website will need to be compatible with.

> It will be important to fully specify and document all interfaces with partner applications in order to ensure a smooth and seamless integration of the website with these external systems.
> 

### 

### Anticipated Workplace Environment

> The anticipated workplace environment for the support team maintaining the IIUC Bus Management System website may include:
> 
- A central office location, where team members can work together in close proximity to facilitate communication and collaboration.
- Access to collaboration tools such as video conferencing software, project management software, and online document sharing platforms, in order to facilitate communication and coordination with team members and other stakeholders.
- Access to the necessary technical infrastructure, including computers, software, and internet access, in order to perform their duties effectively.
- A team size and composition that is appropriate for the workload and responsibilities of the support team, with team members having clear roles and responsibilities.
- Regular communication with drivers and other stakeholders involved in vehicle management, such as through phone, email, or in-person meetings, in order to ensure that the bus schedule is accurate and up-to-date.

> It will be important to create a supportive and efficient workplace environment for the support team in order to ensure the smooth operation of the IIUC Bus Management System website.
> 

### Schedule Constraints

> There may be various schedule constraints that impact the development and maintenance of the IIUC Bus Management System website. Some potential examples could include:
> 
- **Timeframe:** The project may have a specific timeline for completion, which could impact the scope of the work that can be done and the resources available to the project team.
- **Dependencies:** There may be dependencies on other systems or projects that could impact the schedule for the website project. For example, if the website needs to be integrated with the university's student information system, the availability of that system could affect the schedule for the website project.
- **Resource availability:** The availability of resources such as personnel, hardware, and software could also impact the schedule for the project.
- **User testing and feedback:** The project may include user testing and gathering of user feedback, which could require scheduling and coordinating with students and other stakeholders.

> It will be important to carefully plan and manage the schedule for the website project in order to ensure that it is completed within the desired timeframe and that all necessary tasks are completed.
> 

### Budget Constraints

> There may be budget constraints that impact the development and maintenance of the IIUC Bus Management System website. Some potential examples could include:
> 
- **Funding limitations:** If limited amount of funding available for the project, which could impact the scope of the work that can be done and the resources that are available to the project team.
- **Personnel costs:** Personnel costs, such as the salaries of the project team, could be a significant factor in the budget for the project.
- **Hardware and software costs:** The project may require the purchase of hardware or software in order to develop and maintain the website, which could impact the budget.
- **Maintenance and support costs:** Ongoing maintenance and support of the website may also incur costs that need to be considered in the budget

> It will be important to carefully manage the budget for the website project in order to ensure that the project stays on track and is completed within the available funding. This may involve making trade-offs or adjusting the scope of the work as needed in order to stay within budget.
> 

## Naming Conventions and Definitions

> File naming conventions: There are file naming with component name like example: Login component name is Login.php
> 
> 
> ***Folder naming conventions**: These guidelines specify how to name folders and organize resources within them, using a consistent naming structure to help identify the contents of each folder. Folder name like example: Admin, Users etc.*
> 

### Definitions of Key Terms

> Technical terms: PHP, Javascript, Laravel.
> 
> 
> **Content-specific terms:** These are terms that are specific to the content of the Bus Management System such as Bus Schedule, Bus Info, Time.
> 
> **Project-specific terms:** These are terms that are specific to the project itself, such as project roles, processes, or milestones.
> 

### UML and Other Notation Used in This Document

> UML, or Unified Modeling Language, is a standardized language for specifying, visualizing, constructing, and documenting the artifacts of a software-intensive system. In UML, there are several types of diagrams that can be used to represent different aspects of a system, including:
> 
- **ERD (Entity Relationship Diagram):** An ERD is a graphical representation of a database schema, showing the entities (such as tables or data elements) and the relationships between them.
- **DFD (Data Flow Diagram):** A DFD is a graphical representation of the flow of data through a system, showing the inputs, outputs, and processes involved in the system.
- **Use Case diagram:** A use case diagram shows the interactions between a system and its users, depicting the flows of events that occur as the system processes a request or performs a function.
- **Activity diagram:** An activity diagram shows the workflow of a process or system, depicting the sequence of activities and the decision points involved.

> These are the types of diagrams that is used in UML. it is possible to effectively model and communicate the design and functionality of a software-intensive system.
> 

# Requirements

## Activity Diagram:

![asstes/image3.png](asstes/image3.png)

## Product Use Cases

> Use cases are a way to describe how different users might interact with the IIUC Bus Management System website in various situations. These use cases help to identify the features and functionality that the website should offer, and can also help to identify any potential issues or opportunities for improvement. Use cases are commonly used in the development and design of software products and services in order to better understand and prioritize the needs of different types of users.
> 

### Use Case Diagrams

> 
> 

### Product Use Case List

> There are a number of potential use cases for the IIUC Bus Management System website. Some examples could include:
> 
- ***Checking the bus schedule:** Students and other users of the website may want to view the bus schedule in order to plan their commutes or travel to and from campus.*
- ***Providing feedback:** Users may want to provide feedback or ratings about the bus services, such as suggesting new routes or reporting issues with specific buses.*
- ***Planning a route:** The website may include features for users to plan their commutes, such as a route planner or map interface, in order to determine the best way to get to their destination using the bus services.*
- ***Viewing bus location in real-time:** The website may include a feature for users to view the location of buses in real-time, in order to better plan their travel or to see how far away the next bus is.*
- ***Alerts and notifications:** The website may include a feature for users to receive notifications or alerts about changes to the bus schedule or other relevant information, such as delays or detours.*

> These are just a few examples of potential use cases for the IIUC Bus Management System website. There may be other ways in which users might interact with the website, and it will be important to consider the needs and goals of different types of users in order to design and build a website that meets their needs.
> 

## Functional Requirements

> Functional requirements are the specific capabilities, features, and characteristics that a product or system must possess in order to fulfill its intended purpose or function. For the IIUC Bus Management System website, some potential functional requirements could include:
> 
- *The ability to display the current bus schedule in a clear and easy-to-understand format, with options for filtering or searching by route, time, or location.*
- *A user-friendly interface that allows users to easily navigate and interact with the website, including features such as responsive design for mobile devices.*
- *The ability to provide real-time updates to the bus schedule, such as in the case of delays or detours.*
- *A feedback or rating system that allows users to provide comments, suggestions, or ratings about the bus services.*
- *Integration with other systems or applications, such as the university's student information system or the bus scheduling system, in order to retrieve and display relevant data.*
- *Security measures to protect user data and ensure the privacy of users.*
- *The ability to handle a high volume of traffic and transactions, in order to ensure that the website can handle the needs of a large number of users.*
    
    ## Hardware and Software requirements
    

## Hardware Requirements:

> Hardware requirements for the IIUC Bus Management System website may vary depending on the specific needs of the website and the intended audience. Some potential hardware requirements that may be relevant to the project could include:
> 
- **Server:** The website will likely require a server or servers to host the website and manage requests and transactions. The specific type and specifications of the server(s) will depend on the expected volume of traffic and the needs of the website.
- **Network infrastructure:** The website will require a network infrastructure to connect the server(s) to the internet and enable users to access the website. This will include routers, switches, and other networking equipment.
- **Client devices:** Users of the website will need client devices such as computers, laptops, or mobile devices in order to access the website. The website will be designed to be compatible with a range of different devices and web browsers.
- **Other hardware:** Depending on the specific needs of the website, there will be other hardware requirements, such as backup systems, load balancers, or security hardware.

## Software Requirements:

- Android 7 or Up for Android Mobile Devices
- IOS 15 or Up for Apple Devices
- Windows 7 or Up for Desktops
    
    ## Data Requirements
    

> Data requirements for the IIUC Bus Management System website may include both the types of data that the website needs to store and manage, as well as the sources of that data. Some potential data requirements that may be relevant to the project could include:
> 
- ***Bus schedule data:** The website will need to store and display information about the bus schedules, including the times and routes of the buses. This data may be provided by the university's transportation department or other relevant authorities.*
- ***User data:** The website may need to store and manage data about users, such as login credentials, preferences, or feedback.*
- ***Other data:** Depending on the specific needs of the website, there may be other data that the website needs to store and manage, such as data about bus locations or performance, or data from external systems or applications that the website needs to integrate with.*

> It will be important to carefully consider the data requirements for the IIUC Bus Management System website in order to ensure that the website has the necessary resources and capabilities to meet the needs of users and the project team. This may involve setting up appropriate storage and database systems, as well as defining data models and structures to support the needs of the website.
> 
1. Performance Requirements
    1. Speed and Latency Requirements

> Speed and latency requirements for the IIUC Bus Management System website may be important in order to ensure that the website is able to meet the needs of users and deliver an acceptable user experience. Some potential performance-related requirements that may be relevant to the project could include:
> 
- ***Page load times:** The website should be designed to load quickly and efficiently, in order to minimize the time that users have to wait for pages to load.*
- ***Response times:** The website should be able to respond to user requests and actions in a timely manner, in order to ensure that the user experience is smooth and seamless.*
- ***Throughput:** The website should be able to handle a high volume of traffic and transactions, in order to ensure that it is able to meet the needs of a large number of users.*
- ***Latency:** The website should have low latency, meaning that there is minimal delay between the time when a user request is made and the time when the response is received.*

> By carefully considering and defining performance-related requirements such as these, it is possible to ensure that the IIUC Bus Management System website is able to deliver an acceptable level of performance for users.
> 

### Precision or Accuracy Requirements

> Precision and accuracy requirements for the IIUC Bus Management System website may be important in order to ensure that the information and data displayed on the website is reliable and trustworthy. Some potential precision and accuracy requirements that may be relevant to the project could include:
> 
- ***Up-to-date data:** The website should display current and accurate information about bus schedules, routes, and other relevant data.*
- ***Correct calculations:** If the website includes any features that involve calculations or data processing, it should be able to perform these calculations accurately and consistently.*
- ***Reliable sources:** The website should use reliable sources for its data and information, such as the university's transportation department or other official sources.*
- ***Error handling:** The website should be able to handle and report errors in a way that is clear and helpful to users.*

> By carefully considering and defining precision and accuracy requirements such as these, it is possible to ensure that the IIUC Bus Management System website is able to provide users with reliable and trustworthy information.
> 

### Capacity Requirements

> Capacity requirements for the IIUC Bus Management System website may be important in order to ensure that the website is able to handle the needs of a large number of users, such as the approximately 3000 users. Some potential capacity requirements that may be relevant to the project could include:
> 
- ***Scalability:** The website should be able to scale up or down as needed in order to meet the changing needs of users. This may involve adding or removing resources such as servers or bandwidth as needed.*
- ***Load testing**: The website should be load tested in order to ensure that it is able to handle the expected volume of traffic and transactions. This may involve simulating the load of 3000 users or more in order to identify and address any potential bottlenecks or performance issues.*
- ***Resource allocation:** The website should be designed to efficiently allocate resources such as server capacity and bandwidth in order to meet the needs of users.*

> By carefully considering and defining capacity requirements such as these, it is possible to ensure that the IIUC Bus Management System website is able to handle the needs of a large number of users and deliver an acceptable level of performance.
> 
1. Dependability Requirements
    1. Reliability Requirements

> Reliability requirements for the IIUC Bus Management System website may be important in order to ensure that the website is able to function reliably and consistently over time. Some potential reliability requirements that may be relevant to the project could include:
> 
- ***Uptime:** The website should have a high uptime, meaning that it is available and accessible to users for a high percentage of the time.*
- ***Recovery from failures:** The website should be able to recover from failures or errors in a way that is transparent to users and does not disrupt their experience.*
- ***Data integrity:** The website should be able to maintain the integrity of data and information, ensuring that it is accurate and consistent over time.*
- ***Performance consistency:** The website should be able to deliver consistent performance over time, even under heavy load or other stressors.*

> By carefully considering and defining reliability requirements such as these, it is possible to ensure that the IIUC Bus Management System website is able to deliver a reliable and consistent user experience.
> 

### Availability Requirements

> Availability requirements for the IIUC Bus Management System website may be important in order to ensure that the website is able to meet the needs of users at all times. Some potential availability requirements that may be relevant to the project could include:
> 
- ***24/7 availability:** The website should be available to users 24 hours a day, 7 days a week.*
- ***Multiple access points:** The website should be accessible from a range of devices and locations, such as computers, laptops, and mobile devices, and from different locations on or off campus.*
- ***Redundancy:** The website should be designed with redundancy in mind, with multiple servers or other resources available in case of failure or downtime.*
- ***Backup systems:** The website should have backup systems in place to ensure that data and other resources are protected in case of failure or other issues.*

> By carefully considering and defining availability requirements such as these, it is possible to ensure that the IIUC Bus Management System website is able to meet the needs of users at all times.
> 

### Robustness or Fault-Tolerance Requirements

> Robustness or fault-tolerance requirements for the IIUC Bus Management System website may be important in order to ensure that the website is able to continue functioning even in the face of failures or other disruptions. Some potential robustness or fault-tolerance requirements that may be relevant to the project could include:
> 
- ***Error handling:** The website should be able to handle and recover from errors or failures in a way that is transparent to users and does not disrupt their experience.*
- ***Testing:** The website should be tested and validated in order to ensure that it is able to handle a range of different scenarios and conditions, including failures and other disruptions.*
- ***Resilience:** The website should be designed to be resilient, meaning that it is able to continue functioning even in the face of unexpected events or challenges.*
- ***Redundancy:** The website should be designed with redundancy in mind, with multiple servers or other resources available in case of failure or downtime.*

> By carefully considering and defining robustness or fault-tolerance requirements such as these, it is possible to ensure that the IIUC Bus Management System website is able to continue functioning even in the face of failures or other disruptions.
> 

### Safety-Critical Requirements

> Safety-critical requirements for the IIUC Bus Management System website may be important in order to ensure that the website is able to support the safe operation of the university's transportation system. Some potential safety-critical requirements that may be relevant to the project could include:
> 
- ***Accuracy:** The website should be able to display accurate and up-to-date information about bus schedules and routes, in order to help ensure the safety of students and staff.*
- ***Reliability:** The website should be able to function reliably and consistently over time, in order to help ensure the safety of users.*
- ***Redundancy:** The website should be designed with redundancy in mind, with multiple servers or other resources available in case of failure or downtime, in order to help ensure the safety of users.*
- ***Error handling:** The website should be able to handle and recover from errors or failures in a way that is transparent to users and does not disrupt their experience, in order to help ensure the safety of users.*

> By carefully considering and defining safety-critical requirements such as these, it is possible to ensure that the IIUC Bus Management System website is able to support the safe operation of the university's transportation system.
> 
1. Maintainability and Supportability Requirements
    1. Maintenance Requirements

> Maintenance requirements for the IIUC Bus Management System website may be important in order to ensure that the website is able to continue functioning effectively over time. Some potential maintenance requirements that may be relevant to the project could include:
> 
- ***Updates:** The website should be designed in a way that allows for the easy deployment of updates and improvements, in order to keep the website current and effective.*
- ***Monitoring:** The website should have monitoring systems in place to detect and alert the team to any potential issues or problems that may arise.*
- ***Backups:** The website should have a robust backup and recovery system in place to ensure that data and other resources are protected in case of failure or other issues.*
- ***Documentation:** The website should have comprehensive and up-to-date documentation in place to support maintenance and development efforts.*

> By carefully considering and defining maintenance requirements such as these, it is possible to ensure that the IIUC Bus Management System website is able to continue functioning effectively over time.
> 

### Scalability or Extensibility Requirements

> Scalability or extensibility requirements for the IIUC Bus Management System website may be important in order to ensure that the website is able to meet the changing needs of users and the project team over time. Some potential scalability or extensibility requirements that may be relevant to the project could include:
> 
- ***Modularity:** The website should be designed in a modular way, with distinct components that can be added, removed, or modified as needed.*
- ***Expandability:** The website should be able to scale up or down as needed, in order to meet the changing needs of users. This may involve adding or removing resources such as servers or bandwidth as needed.*
- ***Integration:** The website should be able to integrate with other systems or applications as needed, in order to meet the changing needs of users.*
- ***Customization:** The website should be able to be customized as needed, in order to meet the changing needs of users and the project team.*

> By carefully considering and defining scalability or extensibility requirements such as these, it is possible to ensure that the IIUC Bus Management System website is able to meet the changing needs of users and the project team over time.
> 

### Longevity Requirements

> Longevity requirements for the IIUC Bus Management System website may be important in order to ensure that the website is able to continue functioning effectively over a long period of time. Some potential longevity requirements that may be relevant to the project could include:
> 
- ***Support:** The website should have a support system in place to ensure that it is able to continue functioning effectively over time. This may involve providing technical support, updates, and other resources to users.*
- ***Maintenance:** The website should have a robust maintenance plan in place to ensure that it is able to continue functioning effectively over time. This may involve regular updates, monitoring, and other maintenance activities.*
- ***Compatibility:** The website should be designed to be compatible with a range of different systems and technologies, in order to ensure that it is able to continue functioning effectively over time.*
- ***Flexibility:** The website should be flexible and adaptable, in order to ensure that it is able to continue meeting the changing needs of users and the project team over time.*

> By carefully considering and defining longevity requirements such as these, it is possible to ensure that the IIUC Bus Management System website is able to continue functioning effectively over a long period of time.
> 
1. Security Requirements
    1. Access Requirements

> Access requirements for the IIUC Bus Management System website may be important in order to ensure that the website is able to meet the needs of users and provide an acceptable user experience, while also protecting the security of user data and other sensitive information. Some potential access requirements that may be relevant to the project could include:
> 
- ***User authentication:** The website should include a system for authenticating users, such as a login system, in order to ensure that only authorized users are able to access the website.*
- ***Access controls:** The website should include controls to limit access to sensitive information or features based on user roles or permissions.*
- ***Encryption:** The website should use encryption to protect the confidentiality of user data and other sensitive information.*
- ***Data protection:** The website should include measures to protect user data from unauthorized access or tampering, such as backup systems and data loss prevention measures.*

> By carefully considering and defining access requirements such as these, it is possible to ensure that the IIUC Bus Management System website is able to meet the needs of users and provide an acceptable user experience while also protecting the security of user data and other sensitive information.
> 

### Integrity Requirements

> Integrity requirements for the IIUC Bus Management System website may be important in order to ensure that the website is able to maintain the integrity of user data and other information over time. Some potential integrity requirements that may be relevant to the project could include:
> 
- ***Data integrity:** The website should be able to maintain the integrity of user data and other information, ensuring that it is accurate and consistent over time.*
- ***Data validation:** The website should include systems for validating user data and other information in order to ensure that it is accurate and complete.*
- ***Data backup:** The website should include systems for backing up user data and other information in order to protect it in case of failure or other issues.*
- ***Data recovery:** The website should include systems for recovering user data and other information in case of loss or damage.*

> By carefully considering and defining integrity requirements such as these, it is possible to ensure that the IIUC Bus Management System website is able to maintain the integrity of user data and other information over time.
> 

### Privacy Requirements

> Privacy requirements for the IIUC Bus Management System website may be important in order to ensure that the website is able to protect the privacy of users and comply with relevant laws and regulations. Some potential privacy requirements that may be relevant to the project could include:
> 
- ***Data collection:** The website should clearly disclose what data is being collected and how it will be used, and should only collect data that is necessary for the functioning of the website.*
- ***Data storage:** The website should store user data in a secure manner, using encryption and other measures to protect it from unauthorized access or tampering.*
- ***Data sharing:** The website should clearly disclose any circumstances under which user data may be shared with third parties, and should only share data with third parties when necessary and with the user's consent.*
- ***Data retention:** The website should have a clear policy in place for how long user data will be retained, and should delete data when it is no longer needed.*

> By carefully considering and defining privacy requirements such as these, it is possible to ensure that the IIUC Bus Management System website is able to protect the privacy of users and comply with relevant laws and regulations.
> 

### 

1. Look and Feel Requirements
    1. Appearance Requirements

> Appearance requirements for the IIUC Bus Management System website may be important in order to ensure that the website is visually appealing and easy to use for users. Some potential appearance requirements that may be relevant to the project could include:
> 
- ***Layout:** The website should have a clear and organized layout, with intuitive navigation and clear headings and labels.*
- ***Color scheme:** The website should have a cohesive and visually appealing color scheme, with colors that are easy to read and that work well together.*
- ***Typography:** The website should use clear and legible typography, with appropriate font sizes and styles for different types of content.*
- ***Images:** The website should use images and other visual elements in a way that enhances the user experience, without being too distracting or overwhelming.*
- ***Animation:** The website should use animation in a subtle and appropriate way, to enhance the user experience without being too distracting or disruptive.*

> By carefully considering and defining appearance requirements such as these, it is possible to ensure that the IIUC Bus Management System website is visually appealing and easy to use for users.
> 

### Style Requirements

> Style requirements for the IIUC Bus Management System website may be important in order to ensure that the website is visually appealing and consistent in its use of design elements. Some potential style requirements that may be relevant to the project could include:
> 
- ***Branding:** The website should be consistent with the university's branding guidelines, using the appropriate logos, colors, and other elements as specified.*
- ***Consistency:** The website should be consistent in its use of design elements such as typography, layout, and color scheme, in order to create a cohesive user experience.*
- ***Layout:** The website should use a clear and organized layout, with appropriate white space and a logical flow of content.*
- ***Images:** The website should use high-quality images that are appropriate for the context and that support the overall design of the website.*
- ***Typography:** The website should use typography in a way that is consistent with the overall design of the website and that is easy to read.*

> By carefully considering and defining style requirements such as these, it is possible to ensure that the IIUC Bus Management System website is visually appealing and consistent in its use of design elements.
> 
1. Cultural and Political Requirements
    1. Cultural Requirements

> Cultural requirements for the IIUC Bus Management System website may be important in order to ensure that the website is sensitive to the cultural differences and preferences of users. Some potential cultural requirements that may be relevant to the project could include:
> 
- ***Language:** The website should be available in multiple languages, in order to meet the needs of users who speak different languages.*
- ***Localization:** The website should be localized for different regions and cultures, in order to be more relevant and user-friendly for users in different parts of the world.*
- ***Culture-specific design elements:** The website should consider the use of culture-specific design elements, such as colors and symbols, in order to be more culturally sensitive and relevant to users.*
- ***Internationalization:** The website should be designed in a way that is compatible with different international standards and practices, in order to be more accessible and user-friendly for users in different parts of the world.*

> By carefully considering and defining cultural requirements such as these, it is possible to ensure that the IIUC Bus Management System website is sensitive to the cultural differences and preferences of users.
> 

### Political Requirements

> Political requirements for the IIUC Bus Management System website may be important in order to ensure that the website is compliant with relevant laws and regulations and that it does not violate any political norms or values. Some potential political requirements that may be relevant to the project could include:
> 
- ***Legal compliance:** The website should comply with all relevant laws and regulations, including those related to data privacy, security, and accessibility.*
- ***Neutrality:** The website should be neutral and unbiased in its content and presentation, avoiding the promotion of any particular political ideology or agenda.*
- ***Cultural sensitivity:** The website should be sensitive to the cultural and political differences and preferences of users, avoiding the use of language or imagery that could be offensive or inappropriate.*
- ***Freedom of expression:** The website should respect the right to freedom of expression, while also taking steps to prevent the dissemination of hateful or inappropriate content.*

> By carefully considering and defining political requirements such as these, it is possible to ensure that the IIUC Bus Management System website is compliant with relevant laws and regulations and that it does not violate any political norms or values.
> 
1. Legal Requirements
    1. Compliance Requirements

> Compliance requirements for the IIUC Bus Management System website may be important in order to ensure that the website is compliant with relevant laws and regulations and that it does not expose the university to legal risks. Some potential compliance requirements that may be relevant to the project could include:
> 
- ***Data privacy:** The website should comply with relevant data privacy laws and regulations, including those related to the collection, use, and storage of user data.*
- ***Data security:** The website should comply with relevant data security laws and regulations, including those related to the protection of user data from unauthorized access or tampering.*
- ***Accessibility:** The website should comply with relevant accessibility laws and regulations, including those related to the needs of users with disabilities or other special needs.*
- ***Intellectual property:** The website should comply with relevant intellectual property laws and regulations, including those related to the use of copyrighted materials.*

> By carefully considering and defining compliance requirements such as these, it is possible to ensure that the IIUC Bus Management System website is able to meet the requirements of relevant laws and regulations.
> 
1. Design
    1. System Design
        1. Design goals

> Design goals for the IIUC Bus Management System website are important in order to ensure that the website is able to meet the needs and expectations of users. Some potential design goals that may be relevant to the project include usability, accessibility, performance, scalability, and security. To achieve usability, the website should be easy for users to navigate and use, with a clear and intuitive layout and controls. To achieve accessibility, the website should be accessible to users with disabilities or other special needs, in order to meet the needs of as many users as possible. To achieve performance, the website should be fast and responsive, with quick loading times and minimal downtime. To achieve scalability, the website should be able to handle a large number of users without performance issues, in order to be able to accommodate growth over time. To achieve security, the website should be secure, with measures in place to protect user data and other sensitive information. By carefully considering and defining these design goals, it is possible to ensure that the IIUC Bus Management System website is able to meet the needs and expectations of users.
> 

## Followed Model / Approach

> Project management approach: Approach for planning and organizing the development of a travel website is waterfall model.
> 
1. Proposed Software Architecture
    1. Overview

> The IIUC Bus Management System website has been developed using a range of software technologies, including HTML, CSS, PHP, MySQL, Laravel, JavaScript, and Bootstrap.
> 
> 
> HTML (HyperText Markup Language) is a standard markup language used for creating web pages. It allows developers to structure and format content using a variety of elements and attributes.
> 
> CSS (Cascading Style Sheets) is a stylesheet language used for describing the look and formatting of a document written in HTML. It allows developers to specify how elements should be displayed on the page, including colors, fonts, and layout.
> 
> PHP (PHP: Hypertext Preprocessor) is a server-side scripting language used for building dynamic websites and web applications. It allows developers to create scripts that can be executed on the server and generate dynamic content for users.
> 
> MySQL is a popular open-source database management system used for storing and managing data. It is commonly used in conjunction with PHP and other web development technologies to create dynamic, data-driven websites and applications.
> 
> Laravel is a free, open-source PHP web application framework used for building web applications and APIs. It provides a variety of tools and features for developers, including a powerful routing system, a template engine, and an ORM (Object-Relational Mapper) for working with databases.
> 
> JavaScript is a client-side scripting language used for adding interactivity and dynamic behavior to web pages. It allows developers to create scripts that can run in the user's browser and manipulate the page content in real-time.
> 
> Bootstrap is a front-end framework used for building responsive, mobile-first websites and applications. It provides a set of pre-designed HTML and CSS styles that developers can use to create consistent, attractive layouts and user interfaces.
> 
> Together, these software technologies have been used to build the IIUC Bus Management System website, enabling it to provide a range of features and functionality for users.
> 

### Class Diagrams

![assets/image5.jpeg](assets/image5.jpeg)

### DFD

![assets/image6.png](assets/image6.png)

![assets/image7.png](assets/image7.png)

![assets/image8.png](assets/image8.png)

### ERD

> 
> 

### Normalization

> bus Info
> 

| bus_license | student_capacity |
| --- | --- |
| চট্টমেট্রো-ব ১৫-৭৫৩৮ | 60 |
| চট্টমেট্রো-ছ ১১-৭৫৩৯ | 50 |
| চট্টমেট্রো-ব ১৫-৭৫৪০ | 40 |
| চট্টমেট্রো-ব ১৪-৭৭৪১ | 40 |
| চট্টমেট্রো-ঝ ১৫-৭৫৪২ | 50 |
| চট্টমেট্রো-ব ১২-৩৪৭৫ | 40 |
| চট্টমেট্রো-ব ১৩-৭৫৪৪ | 60 |
| চট্টমেট্রো-ব ১৭-৭৫৪৬ | 60 |
| চট্টমেট্রো-ব ১১-৭৫৪৭ | 50 |

> driver_info
> 

| driver_id | driver_name | driving_license | driver_phone | driver_picture |
| --- | --- | --- | --- | --- |
| 2 | Abul kashem | CG0121788L00004 | 8801157681654 | image/driver/user.png |
| 3 | Karim abdullah | NK0001441C00007 | 8801151766871 | image/driver/user.png |
| 4 | Zafor | JS0013011C00001 | 8801153144612 | image/driver/user.png |
| 5 | Hakim Mia | DK0791161L00001 | 8801158862458 | image/driver/user.png |
| 6 | Abdullah mamun | NK0001441C00002 | 8801151428045 | image/driver/user.png |
| 7 | Shakil khan | CG0121788L00003 | 8801152198430 | image/driver/user.png |
| 8 | Mohammad Joshim | DK0791161L00004 | 8801153488651 | image/driver/user.png |
| 9 | Leakot hossain | CG012788L00006 | 8801152914442 | image/driver/user.png |
| 10 | Abdul Rahim | CG012788L00070 | 8801153466073 | image/driver/user.png |

> notice_info
> 

| notice_id | notice_title | notice_thumbnail | notice_description |
| --- | --- | --- | --- |
| 16 | খুলশী রোডের শিক্ষার্থীদের উদ্দেশ্যে। | খুলশী অভিমুখে যাত্রাকারী বাসসমূহের শিক্ষার্থীদের উদ্দেশ্যে। | খুলশি রোড এর মেরামত কাজের কারণে আগামীকালের বাসসমূহ টাইগারপাস হয়ে যাত্রা করবে। |
| 17 | চট্টেশ্বরী যাত্রীদের উদ্দেশ্যে। | আগামীকাল চট্টেশ্বরী হতে যাত্রাকারী বাস | আগামীকাল চট্টেশ্বরী হতে যাত্রাকারী বাস ৯.১০ এর বদলে ৯টায় ক্যাম্পাসের উদ্দেশ্যে ছেড়ে যাবে। |

> route_info
> 

| route_id | route_name | start_point | end_point |
| --- | --- | --- | --- |
| 1 | Hathazari | Hathazari | IIUC |
| 2 | Baroyar hat | Baroyar hat | IIUC |
| 3 | Shah Amanath Bridge | Shah Amanath Bridge | IIUC |
| 4 | BaroDighir Par | BaroDighir Par | IIUC |
| 5 | Miler matha | Miler matha | IIUC |
| 6 | BOT | BOT | IIUC |
| 7 | Mirsharai | Mirsharai | IIUC |
| 8 | Chatteswari | Chatteswari | IIUC |
| 9 | Kotowali | Kotowali | IIUC |

> stops_info
> 

| stop_id | route_id | stop_name |
| --- | --- | --- |
| 1 | 1 | Hathhazari |
| 2 | 1 | Hathhazari College |
| 3 | 1 | BaroDighir Par |
| 4 | 1 | Baizid link Road |
| 5 | 1 | IIUC |
| 6 | 2 | BaroyarHat |
| 7 | 2 | Mirsharai |
| 8 | 2 | Borodarghahat |
| 9 | 2 | Sitakunda |

> Schedule
> 

| schedule_id | bus_license | route_id | driver_id | start_time |
| --- | --- | --- | --- | --- |
| 12 | চট্টমেট্রো-ব ১৫-৭৫৩৮ | 1 | 49 | 8:50:00 |
| 13 | চট্টমেট্রো-ছ ১১-৭৫৩৯ | 2 | 3 | 8:55:00 |
| 14 | চট্টমেট্রো-ব ১৫-৭৫৪০ | 3 | 4 | 8:55:00 |
| 15 | চট্টমেট্রো-ব ১৪-৭৭৪১ | 4 | 5 | 9:05:00 |
| 16 | চট্টমেট্রো-ঝ ১৫-৭৫৪২ | 5 | 6 | 9:05:00 |
| 17 | চট্টমেট্রো-ব ১২-৩৪৭৫ | 6 | 7 | 9:05:00 |
| 18 | চট্টমেট্রো-ব ১৩-৭৫৪৪ | 7 | 8 | 9:05:00 |
| 19 | চট্টমেট্রো-ব ১৭-৭৫৪৬ | 8 | 9 | 9:05:00 |

student_tbl

| student_name | student_id | student_batch | student_email | student_department | student_phone | student_password |
| --- | --- | --- | --- | --- | --- | --- |
| Mohammad Sakib Chowdhury | C193055 | 49 | mdsakibchy071@gmail.com | 4 | 1760886380 | 2467d3744600858cc9026d5ac6005305 |
| ifti | C193074 | 49 | 123@gmail.com | 4 | 1884759324 | 202cb962ac59075b964b07152d234b70 |
| Mainuddin | C193070 | 49 | ar@gmail.com | 4 | 17543325645 | 134089ff03fe553893701129f7eade4e |

### Use Case Diagram

![assets/image10.png](assets/image10.png)

### Schema Diagram

![assets/image11.jpeg](assets/image11.jpeg)

### Activity Diagram

![assets/image12.png](assets/image12.png)

## User Interface

### Home Page (Non-Logged In)

![assets/image13.png](assets/image13.png)

### Search Page (Non-Logged In)

![assets/image14.png](assets/image14.png)

### Search Result Page (Non-Logged In)

![assets/image15.png](assets/image15.png)

### Schedule Page (Non-Logged In)

![assets/image16.png](assets/image16.png)

### Log In Page (Non-Logged In)

![assets/image17.png](assets/image17.png)

### Sign Up Page (Non-Logged In)

![assets/image18.png](assets/image18.png)

### Sign Up Page (Non-Logged In)

![assets/image19.png](assets/image19.png)

### Home Page (Logged In)

![assets/image20.png](assets/image20.png)

### Schedule Page (Logged In)

![assets/image21.png](assets/image21.png)

### Search Page (Logged In)

![assets/image22.png](assets/image22.png)

### Search Result (Logged In)

![assets/image23.png](assets/image23.png)

### Bus Selection Page (Logged In)

![assets/image24.png](assets/image24.png)

### Bus Selection Page (Logged In)

![assets/image25.png](assets/image25.png)

### Notice Page (Logged In)

![assets/image26.png](assets/image26.png)

### Admin Panel Login

![assets/image27.png](assets/image27.png)

### Admin Dashboard (Hidden Side Panel)

![assets/image28.png](assets/image28.png)

### Admin Dashboard (Showed Side Panel)

![assets/image29.png](assets/image29.png)

### Schedule Dashboard (Admin)

![assets/image30.png](assets/image30.png)

### Bus Dashboard (Admin)

![assets/image31.png](assets/image31.png)

### Student Info Dashboard (Admin)

![assets/image32.png](assets/image32.png)

### Driver Info Dashboard (Admin)

![assets/image33.png](assets/image33.png)

### Route Info Dashboard (Admin)

![assets/image34.png](assets/image34.png)

### Notice Info Dashboard (Admin)

![assets/image35.png](assets/image35.png)

1. Test Plans
    
    ## Features to be tested / not to be tested
    

> There may be a range of features of the IIUC Bus Management System website that need to be tested in order to ensure that they are working correctly and as expected. Some potential features that may need to be tested could include:
> 
- **Bus schedule display:** The website should correctly display the current bus schedule for the university, including route information, departure and arrival times, and any updates or changes.
- **Route mapping:** The website should provide a map of each bus route, showing the stops and points of interest along the way.
- **Bus tracking:** The website should provide real-time tracking information for buses, showing their current location and estimated arrival time at each stop.
- **Notification system:** The website could provide notification alerts for users, such as updates on bus schedules or delays, via email or SMS.
- **User accounts:** The website should allow users to create and manage their own accounts, including the ability to view and update their personal information and preferences.

> In addition to these features, there may also be other features of the website that do not need to be tested, such as those that are not critical to the core functionality of the website or that are not expected to be used frequently by users. These features may be considered low priority for testing purposes. By carefully identifying the features that need to be tested and those that do not, it is possible to ensure that the IIUC Bus Management System website is tested effectively and efficiently.
> 

## Pass/Fail Criteria

> Pass/fail criteria for the IIUC Bus Management System website may be important in order to define the standards that the website must meet in order to be considered successful. Some potential pass/fail criteria that may be relevant to the project could include:
> 
- **Usability:** The website should be easy for users to navigate and use, with a clear and intuitive layout and controls.
- **Performance:** The website should be fast and responsive, with quick loading times and minimal downtime.
- **Security:** The website should be secure, with measures in place to protect user data and other sensitive information.
- **Accuracy:** The website should provide accurate and up-to-date information on bus schedules and routes.
- **Compliance:** The website should comply with all relevant laws and regulations, including those related to data privacy, security, and accessibility.

> By defining clear pass/fail criteria such as these, it is possible to ensure that the IIUC Bus Management System website meets the necessary standards of quality and performance.
> 

## Approach

> The approach for the IIUC Bus Management System website may involve a range of activities and processes in order to ensure that the website is developed effectively and efficiently. Some potential steps that may be involved in the approach for this project could include:
> 
- **Planning:** This may involve defining the scope, objectives, and requirements for the website, as well as developing a project plan and timeline.
- **Design:** This may involve creating wireframes, mockups, and prototypes of the website in order to plan the layout, navigation, and user experience.
- **Development:** This may involve coding and implementing the website using HTML, CSS, PHP, and other relevant technologies, as well as testing and debugging the website to ensure that it is functioning correctly.
- **Deployment:** This may involve installing and setting up the website on a web server, as well as configuring any necessary databases or other systems.
- **Maintenance:** This may involve ongoing activities such as updating the website with new features and content, as well as providing technical support and troubleshooting for users.

> By following a structured approach such as this, it is possible to ensure that the IIUC Bus Management System website is developed effectively and efficiently, and that it meets the needs and expectations of users.
> 

## Suspension and resumption

> Suspension and resumption refer to the process of temporarily halting or delaying work on a project and then later resuming work on it. This may be necessary for a variety of reasons, such as changes in project priorities, resource constraints, or external factors that impact the project.
> 
> 
> For the IIUC Bus Management System website, suspension and resumption may be necessary in order to ensure that the project is able to meet the needs and expectations of users. This may involve temporarily halting work on certain features or functionality in order to focus on more pressing needs, and then later resuming work on those features when resources become available.
> 
> In order to effectively manage suspension and resumption for the IIUC Bus Management System website, it may be necessary to carefully track the status of work on the project and to identify any potential impacts or risks associated with suspending or resuming work. This may involve maintaining clear and up-to-date project documentation, as well as communicating with stakeholders and other team members about the status of the project and any changes to the project plan. By carefully managing suspension and resumption, it is possible to ensure that the IIUC Bus Management System website is able to meet the needs and expectations of users in a timely and effective manner.
> 

## Testing materials (hardware / software requirements)

> In order to test the IIUC Bus Management System website, there may be certain hardware and software requirements that need to be considered. Some potential testing materials that may be necessary for this project could include:
> 
- **Mobile devices:** In order to test the website on mobile devices, it may be necessary to use a range of devices running different operating systems, such as Android 7 or later for Android devices, iOS 15 or later for Apple devices, and so on.
- **Desktops:** In order to test the website on desktop computers, it may be necessary to use a range of computers running different operating systems, such as Windows 7 or later, macOS, or Linux.
- **Browsers:** In order to test the compatibility of the website with different browsers, it may be necessary to use a range of different browser types and versions, such as Google Chrome, Mozilla Firefox, Safari, and Internet Explorer.
- **Testing tools:** In order to test the functionality and performance of the website, it may be necessary to use a range of testing tools and utilities, such as load testing tools, performance monitoring tools, and so on.

> By considering these and other hardware and software requirements, it is possible to ensure that the IIUC Bus Management System website is tested effectively and thoroughly.
> 

## Test cases

> Test cases are specific scenarios or conditions that are used to test the behavior and performance of a product or system. For the IIUC Bus Management System website, there may be a range of test cases that are relevant to the project. Some potential test cases that could be considered for this website could include:
> 
- **User experience:** Test the website's usability and user-friendliness, including navigation, layout, and overall design.
- **Page load time:** Test the website's performance and speed, including the time it takes for pages to load and display content.
- **Content showcase time**: Test the website's ability to display different types of content, such as text, images, and videos, and measure the time it takes for the content to be displayed.
- **Query time:** Test the website's ability to search for and display information in response to user queries, and measure the time it takes for the query to be processed and the results to be displayed.

> These are just a few examples of test cases that could be relevant to the IIUC Bus Management System website. By developing a comprehensive set of test cases that cover a wide range of scenarios and conditions, it is possible to ensure that the website is thoroughly tested and that any issues or defects are identified and addressed.
> 

## Testing schedule

> The testing schedule for the IIUC Bus Management System website may involve a range of activities and processes that are carried out over a specific period of time in order to ensure that the website is thoroughly tested and that any issues or defects are identified and addressed.
> 
> 
> Some potential activities that may be included in the testing schedule for this project could include:
> 
- **Preparation:** This may involve setting up the necessary testing environments and tools, as well as defining the test cases and test data that will be used.
- **Execution:** This may involve running the test cases and collecting data on the performance and behavior of the website.
- **Analysis:** This may involve reviewing the test results and identifying any issues or defects that need to be addressed.
- **Reporting:** This may involve documenting the test results and providing feedback to the development team.
- **Correction:** This may involve fixing any identified issues or defects, and retesting the website to ensure that the issues have been resolved.

> By following a structured testing schedule such as this, it is possible to ensure that the IIUC Bus Management System website is thoroughly tested and that any issues or defects are identified and addressed in a timely and effective manner.
> 

# Feasibility Study

## Project Introduction:

**Overview:** Bus management system is an online web-based

application with which one institution has many vehicles and passengers

to manage for an extended period of time. This application will make

things easy for both consumers and clients at the same time managing

their desired vehicles and organizing a large fleet with close to zero

hassle.

Objective:

● Schedule management for buses

● Assigning roles to drivers

● Setting routes to dedicated buses

● Consumer profile creation

● Database for vehicles

● Database for Users

● Database for moderators

● Database for Drivers

● Data protection for every Sector

● UI for all user base

● Specific destination selection

● Dynamically assigned updates

● Notification to consumers

● Consumer’s profile management

● Consumer’s front page management

● Better UX system

Need for this project: Bus management system is an easy-to-use

web-based App. This can dramatically change the scenario for bus

management if the venture has a large fleet they need to manage. From

the user end, one can easily find the designated vehicle they need to

jump into without needing to ask others. Everything will be automated

ensuring a smooth ride. Not only that, with the Data, one venture can

even out and calculate the need for the approximate number of vehicles

for each route, cutting costs on fuel, manpower, etc for the future.

# Feasibility Study:

**Technical Feasibility:** Bus management system will be a

complete web-based application. The main Technologies and tools that

are associated with them are given below:

● HTML

● CSS

● JavaScript

● Bootstrap

● PHP

● MySQL

● Figma (For wireframing)

● Adobe Illustrator (For elements)

The technical skills needed for each of the Technologies are

doable and each is publicly available. time constraints for product

development and the simplicity of The use of these technologies are

coordinated. All of the concepts may be transformed into functional

solutions by our technical team. These demonstrate the project's

technological feasibility.

**Economical Feasibility:** The main cost of a web-based

application will be things like Hosting, Managers, development, and

maintenance. Other than that the app will not cost the client that much.

Our application will require less manpower to handle and considering the

fact, that the venture can optimize its workflow by reducing vehicles and

saving on fuel and manpower, that alone can make this service a good

decision for the venture to make. Also, the smooth transportation

experience will also leave a positive impression on the venture from all

the consumers.

**Legal Feasibility:** Currently there are no similar services to ours.

Some apps may come close to some ride-sharing apps like Uber,

Pathao, etc. There are some GPS-based services that have similar fleet

management system but they are foreign-based services who has no

official copyright in our country right now. Potential clients will only be

charged for maintenance costs. There won't be a copyright issue

because the software libraries utilized in this system are free

open-source libraries. The proposed project is compliant with all

applicable laws. All data protection laws and social media regulations

are observed here.

**Operational Feasibility:** We will use the agile software

development approach for this project. Because facilitating rapid project

completion is the Agile model's primary goal. Agility is necessary for this

assignment to be completed. By adapting the process to the project and

eliminating processes that might not be necessary for that project, agility

is accomplished. Additionally, time and effort wastes of space are

prevented. The steps involved in the operation are:

● Requirement gathering

● Requirement Analysis

● Design

● Coding

● Unit Testing

● Acceptance testing

**Scheduling Feasibility:** From our perspective, our project can be

finished in 80 to 90 days. The project will take a few more days to finish

if there are any adjustments. We intend to deliver a system that is on

schedule and entirely bug-free.

1. Project Issues / Limitations
    
    ## Open Issues
    

> There have been no reported technical issues with the IIUC Bus Management System website to date. If any issues do arise, they can be addressed by the development team. There are also no reported problems with the usability or accessibility of the website, nor are there any issues with the appearance or style of the website that require attention.
> 

## Risks

> There may be a range of risks that could impact the development and success of the IIUC Bus Management System website. Some potential risks that could be considered for this project include:
> 
- **Technical risks:** These could include issues related to the technology and infrastructure used to build and operate the website, such as compatibility problems, performance issues, or security vulnerabilities.
- **Resource risks:** These could include issues related to the availability and allocation of resources, such as funding, personnel, or equipment.
- **Schedule risks:** These could include issues related to meeting deadlines or achieving project milestones, such as delays or unexpected challenges that impact the project schedule.

> By identifying and analyzing these and other potential risks, it is possible to develop a risk management plan that helps to mitigate or address these risks and ensure the success of the IIUC Bus Management System website.
> 

## Costs

> The cost of developing and operating the IIUC Bus Management System website may include a range of expenses. Some potential costs to consider could include:
> 
- **Hosting cost:** This is the cost of hosting the website on a server or other infrastructure, which in this case is estimated to be around 10,000 Bangladeshi taka per month.
- **Development cost:** This is the cost of designing, developing, and testing the website, which is estimated to be 30,000 Taka in this case.
- **Personnel costs:** This could include the cost of hiring and paying employees or contractors to work on the project, as well as any training or professional development costs.
- **Equipment and infrastructure costs:** This could include the cost of purchasing or leasing hardware, such as servers or other equipment needed to support the website.
- **Maintenance and support costs:** This could include the cost of maintaining and updating the website, as well as providing support to users.

> In this case, it is noted that there will be no advertising or marketing costs for the website. By considering these and other potential costs, it is possible to develop a budget for the IIUC Bus Management System website and ensure that the project is financially viable.
> 

## Project Retrospective

> At the end of the IIUC Bus Management System website project, it may be beneficial to conduct a project retrospective in order to identify what went well and what could be improved in future projects. The process of conducting a project retrospective for this project could involve the following steps:
> 
- **Gathering data:** This may include collecting feedback from team members and stakeholders involved in the project, as well as reviewing project documents and other relevant data sources.
- **Analyzing the data:** This may involve identifying patterns and trends in the data, and identifying any areas where the project was successful or where there were challenges or problems.
- **Identifying action items:** Based on the analysis of the data, the team can identify specific actions that should be taken to address any issues or challenges that were identified, or to improve upon the successes of the project.
- **Implementing action items:** The team should work to implement the identified action items, either as part of the current project or in future projects.
- **Reviewing progress:** The team should periodically review the progress made on the action items to ensure that they are being effectively addressed and that the desired improvements are being realized.

> By conducting a thorough and systematic project retrospective, it is possible to gain valuable insights into the IIUC Bus Management System website project and make continuous improvements to future projects.
> 

# Conclusion

In conclusion, the IIUC Bus Management System website is a valuable tool that helps students and staff at the university check bus schedules and select routes. The website is designed to be simple and easy to use, with a clean design and good user experience. It also includes an admin panel and student panel that provide additional functionality and allow users to access the information they need. While the website has already proven to be useful, it has the potential to be even more powerful with the addition of features such as live view and other enhancements. Overall, the IIUC Bus Management System website is a valuable resource that helps to improve efficiency and convenience for users.

# Glossary

Here are some potential terms that could be included in a glossary for the IIUC Bus Management System website project:

- **IIUC Bus Management System website:** The main website developed as part of this project, which allows users to check bus schedules and select routes.
- **Admin panel:** A section of the website that is only accessible to administrators, where they can manage and update the information available on the website.
- **Student panel:** A section of the website that is only accessible to students, where they can view bus schedules and select routes.
- **User experience (UX):** The overall satisfaction and effectiveness of a website for its users, taking into account factors such as ease of use, aesthetic appeal, and functionality.
- **User interface (UI):** The visual and interactive elements of a website that users interact with, including layout, buttons, and menus.
- **Database:** A structured collection of data that is stored electronically and can be accessed and updated as needed.
- **Server:** A computer or other device that stores and manages data and resources, and provides access to them over a network.
- **API:** An application programming interface, which is a set of rules and protocols that allows different software applications to communicate with each other.
- **HTML:** Hypertext Markup Language, a programming language used to create and structure content on the web.
- **CSS:** Cascading Style Sheets, a programming language used to style and layout web content.
- **PHP:** A programming language commonly used for web development.
- **Laravel:** A PHP framework for web application development.
- **JavaScript:** A programming language commonly used for web development and interactive web content.
- **Bootstrap:** A framework for designing and building responsive, mobile-first websites.

# References / Bibliography

| [1] | Robertson and Robertson, Mastering the Requirements Process. |
| --- | --- |
| [2] | A. Silberschatz, P. B. Galvin and G. Gagne, Operating System Concepts, Ninth ed., Wiley, 2013. |
| [3] | J. Bell, "Underwater Archaeological Survey Report Template: A Sample Document for Generating Consistent Professional Reports," Underwater Archaeological Society of Chicago, Chicago, 2012. |
| [4] | M. Fowler, UML Distilled, Third Edition, Boston: Pearson Education, 2004. |