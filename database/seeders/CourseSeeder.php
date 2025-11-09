<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            // Data Science (Category ID: 1)
            [
                'category_id' => 1,
                'writer_id' => 1,
                'title' => 'Machine Learning',
                'slug' => 'machine-learning',
                'image' => 'https://images.unsplash.com/photo-1555949963-aa79dcee981c?w=800',
                'description' => 'Learn the fundamentals of Machine Learning and its applications in real-world scenarios.',
                'content' => 'Machine Learning is a subset of artificial intelligence that provides systems the ability to automatically learn and improve from experience without being explicitly programmed. This course covers supervised learning, unsupervised learning, and reinforcement learning techniques. You will learn about various algorithms including linear regression, decision trees, neural networks, and deep learning. The course also includes practical projects where you will build and train your own machine learning models using popular frameworks like TensorFlow and scikit-learn.',
                'views' => rand(100, 1000),
            ],
            [
                'category_id' => 1,
                'writer_id' => 1,
                'title' => 'Deep Learning',
                'slug' => 'deep-learning',
                'image' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=800',
                'description' => 'Explore advanced neural networks and deep learning architectures.',
                'content' => 'Deep Learning is a specialized branch of machine learning that uses neural networks with multiple layers. This course dives deep into convolutional neural networks (CNNs), recurrent neural networks (RNNs), and transformer architectures. You will learn how to build and train deep learning models for image recognition, natural language processing, and time series analysis. The course includes hands-on projects using PyTorch and TensorFlow, covering topics like transfer learning, GANs, and attention mechanisms.',
                'views' => rand(100, 1000),
            ],
            [
                'category_id' => 1,
                'writer_id' => 1,
                'title' => 'Natural Language Processing',
                'slug' => 'natural-language-processing',
                'image' => 'https://images.unsplash.com/photo-1620712943543-bcc4688e7485?w=800',
                'description' => 'Master the techniques for processing and analyzing human language data.',
                'content' => 'Natural Language Processing (NLP) enables computers to understand, interpret, and generate human language. This comprehensive course covers text preprocessing, tokenization, word embeddings, and sentiment analysis. You will learn about modern NLP architectures including BERT, GPT, and transformer models. The course includes practical applications such as chatbots, machine translation, text summarization, and named entity recognition. Students will work on real-world projects using libraries like NLTK, spaCy, and Hugging Face Transformers.',
                'views' => rand(100, 1000),
            ],
            
            // Network Security (Category ID: 2)
            [
                'category_id' => 2,
                'writer_id' => 2,
                'title' => 'Software Security',
                'slug' => 'software-security',
                'image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800',
                'description' => 'Learn how to build secure software and protect against vulnerabilities.',
                'content' => 'Software Security focuses on building applications that are resilient to attacks and vulnerabilities. This course covers secure coding practices, common vulnerabilities like SQL injection and XSS, and how to prevent them. You will learn about authentication, authorization, encryption, and secure communication protocols. The course includes hands-on labs where you will identify and fix security vulnerabilities in real applications. Topics also include OWASP Top 10, security testing, and secure software development lifecycle (SDLC).',
                'views' => rand(100, 1000),
            ],
            [
                'category_id' => 2,
                'writer_id' => 2,
                'title' => 'Network Administration',
                'slug' => 'network-administration',
                'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=800',
                'description' => 'Master the skills needed to manage and maintain computer networks.',
                'content' => 'Network Administration covers the essential skills for managing enterprise networks. This course teaches you about network protocols, IP addressing, routing, switching, and network troubleshooting. You will learn how to configure routers, switches, and firewalls, as well as implement network security measures. The course includes practical labs using Cisco equipment and network simulation tools. Topics covered include DNS, DHCP, VLANs, VPNs, and network monitoring tools. Students will gain hands-on experience in designing, implementing, and maintaining robust network infrastructures.',
                'views' => rand(100, 1000),
            ],
            [
                'category_id' => 2,
                'writer_id' => 2,
                'title' => 'Popular Network Technology',
                'slug' => 'popular-network-technology',
                'image' => 'https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=800',
                'description' => 'Discover the latest trends and technologies in modern networking.',
                'content' => 'Popular Network Technology explores cutting-edge networking solutions and trends. This course covers cloud networking, software-defined networking (SDN), network function virtualization (NFV), and 5G technology. You will learn about IoT networking, edge computing, and network automation using tools like Ansible and Python. The course also covers modern protocols like HTTP/3, QUIC, and WebRTC. Students will gain insights into how major tech companies build and scale their network infrastructures, including content delivery networks (CDNs) and distributed systems.',
                'views' => rand(100, 1000),
            ],
            
            // Interactive Multimedia (Category ID: 3)
            [
                'category_id' => 3,
                'writer_id' => 3,
                'title' => 'Human and Computer Interaction',
                'slug' => 'human-computer-interaction',
                'image' => 'https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?w=800',
                'description' => 'Study the principles of designing intuitive and user-friendly interfaces.',
                'content' => 'Human-Computer Interaction (HCI) is the study of how people interact with computers and digital systems. This course covers user-centered design principles, usability testing, and interaction design patterns. You will learn about cognitive psychology, user research methods, and accessibility guidelines. The course includes practical projects where you will design and prototype interactive systems. Topics covered include information architecture, wireframing, prototyping tools like Figma and Adobe XD, and conducting user studies. Students will develop skills in creating interfaces that are both functional and delightful to use.',
                'views' => rand(100, 1000),
            ],
            [
                'category_id' => 3,
                'writer_id' => 3,
                'title' => 'User Experience',
                'slug' => 'user-experience',
                'image' => 'https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?w=800',
                'description' => 'Create exceptional user experiences through research and design.',
                'content' => 'User Experience (UX) design focuses on creating products that provide meaningful and relevant experiences to users. This comprehensive course covers the entire UX design process from research to implementation. You will learn about user personas, journey mapping, information architecture, and interaction design. The course includes hands-on projects using industry-standard tools and methodologies. Topics covered include usability testing, A/B testing, design thinking, and UX metrics. Students will build a portfolio of UX projects demonstrating their ability to solve real-world design challenges.',
                'views' => rand(100, 1000),
            ],
            [
                'category_id' => 3,
                'writer_id' => 3,
                'title' => 'User Experience for Digital Immersive Technology',
                'slug' => 'ux-digital-immersive-technology',
                'image' => 'https://images.unsplash.com/photo-1622979135225-d2ba269cf1ac?w=800',
                'description' => 'Design immersive experiences for VR, AR, and mixed reality platforms.',
                'content' => 'User Experience for Digital Immersive Technology explores the unique challenges and opportunities of designing for virtual reality (VR), augmented reality (AR), and mixed reality (MR) platforms. This course covers spatial design principles, 3D interaction patterns, and immersive storytelling techniques. You will learn about presence, motion sickness prevention, and haptic feedback design. The course includes hands-on projects using Unity and Unreal Engine to create immersive experiences. Topics also include gesture-based interfaces, voice interaction, and designing for different VR/AR devices like Meta Quest, HoloLens, and mobile AR platforms.',
                'views' => rand(100, 1000),
            ],
            
            // Software Engineering (Category ID: 4)
            [
                'category_id' => 4,
                'writer_id' => 1,
                'title' => 'Pattern Software Design',
                'slug' => 'pattern-software-design',
                'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800',
                'description' => 'Learn proven design patterns for building maintainable software.',
                'content' => 'Pattern Software Design teaches you the fundamental design patterns that every software engineer should know. This course covers creational, structural, and behavioral patterns including Singleton, Factory, Observer, Strategy, and many more. You will learn when and how to apply these patterns to solve common software design problems. The course includes practical examples in multiple programming languages and real-world case studies. Topics also cover SOLID principles, dependency injection, and architectural patterns like MVC, MVVM, and Clean Architecture. Students will develop the ability to write more maintainable, scalable, and testable code.',
                'views' => rand(100, 1000),
            ],
            [
                'category_id' => 4,
                'writer_id' => 1,
                'title' => 'Agile Software Development',
                'slug' => 'agile-software-development',
                'image' => 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=800',
                'description' => 'Master agile methodologies for efficient software development.',
                'content' => 'Agile Software Development introduces you to modern software development methodologies that emphasize flexibility, collaboration, and customer satisfaction. This course covers Scrum, Kanban, and XP (Extreme Programming) frameworks. You will learn about sprint planning, daily standups, retrospectives, and continuous integration/continuous deployment (CI/CD). The course includes practical exercises in user story writing, estimation techniques, and agile project management tools like Jira and Trello. Topics also cover test-driven development (TDD), pair programming, and DevOps practices. Students will gain hands-on experience working in agile teams on real projects.',
                'views' => rand(100, 1000),
            ],
            [
                'category_id' => 4,
                'writer_id' => 1,
                'title' => 'Code Reengineering',
                'slug' => 'code-reengineering',
                'image' => 'https://images.unsplash.com/photo-1542831371-29b0f74f9713?w=800',
                'description' => 'Transform legacy code into modern, maintainable software.',
                'content' => 'Code Reengineering focuses on the techniques and strategies for improving existing codebases without changing their external behavior. This course covers refactoring patterns, code smells, and technical debt management. You will learn how to safely modernize legacy systems, improve code quality, and reduce complexity. The course includes hands-on projects where you will refactor real-world codebases using automated testing and refactoring tools. Topics covered include static code analysis, dependency management, modularization strategies, and migration patterns. Students will develop skills in reading and understanding complex codebases and making systematic improvements.',
                'views' => rand(100, 1000),
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
