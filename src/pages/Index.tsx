import { motion, useInView } from "framer-motion";
import { useRef, useState, useEffect } from "react";
import { 
  Mountain, 
  Camera, 
  Users, 
  MapPin, 
  Star, 
  Phone, 
  Mail, 
  MessageCircle,
  Facebook,
  Instagram,
  Youtube,
  ArrowRight,
  CheckCircle,
  Clock,
  Shield,
  Award,
  Send,
  Menu,
  X
} from "lucide-react";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Textarea } from "@/components/ui/textarea";
import { useToast } from "@/hooks/use-toast";

// Import safari images
import heroSafari from "@/assets/hero-safari.jpg";
import zanzibarBeach from "@/assets/zanzibar-beach.jpg";
import kilimanjaroPeak from "@/assets/kilimanjaro-peak.jpg";
import serengetiMigration from "@/assets/serengeti-migration.jpg";
import ngorongoroCrater from "@/assets/ngorongoro-crater.jpg";
import maasaiCulture from "@/assets/maasai-culture.jpg";

const Index = () => {
  const { toast } = useToast();
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [scrollY, setScrollY] = useState(0);

  // Scroll effect for parallax
  useEffect(() => {
    const handleScroll = () => setScrollY(window.scrollY);
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  // Animation refs
  const heroRef = useRef(null);
  const aboutRef = useRef(null);
  const destinationsRef = useRef(null);
  const servicesRef = useRef(null);
  const whyChooseRef = useRef(null);
  const testimonialsRef = useRef(null);
  const contactRef = useRef(null);

  const heroInView = useInView(heroRef, { once: true });
  const aboutInView = useInView(aboutRef, { once: true });
  const destinationsInView = useInView(destinationsRef, { once: true });
  const servicesInView = useInView(servicesRef, { once: true });
  const whyChooseInView = useInView(whyChooseRef, { once: true });
  const testimonialsInView = useInView(testimonialsRef, { once: true });
  const contactInView = useInView(contactRef, { once: true });

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    toast({
      title: "Asante Sana! 🦁",
      description: "Your message has been sent. We'll contact you within 24 hours!",
    });
  };

  const destinations = [
    {
      name: "Serengeti National Park",
      image: serengetiMigration,
      description: "Witness the Great Migration and endless plains filled with wildlife",
      highlights: ["Great Migration", "Big Five", "Hot Air Balloon Safaris"]
    },
    {
      name: "Ngorongoro Crater",
      image: ngorongoroCrater,
      description: "The world's largest inactive volcanic caldera, a natural wonder",
      highlights: ["UNESCO World Heritage", "Dense Wildlife", "Maasai Culture"]
    },
    {
      name: "Mount Kilimanjaro",
      image: kilimanjaroPeak,
      description: "Africa's highest peak and the world's tallest freestanding mountain",
      highlights: ["Uhuru Peak", "5 Climate Zones", "Guided Treks"]
    },
    {
      name: "Zanzibar Island",
      image: zanzibarBeach,
      description: "Pristine beaches, spice tours, and rich Swahili culture",
      highlights: ["White Sand Beaches", "Stone Town", "Spice Tours"]
    }
  ];

  const services = [
    {
      icon: Camera,
      title: "Game Drives",
      description: "Professional guided safaris with expert local guides and comfortable 4WD vehicles"
    },
    {
      icon: Users,
      title: "Cultural Tours",
      description: "Authentic experiences with local communities, traditional dances, and cultural immersion"
    },
    {
      icon: MapPin,
      title: "Airport Transfers",
      description: "Reliable transportation from airports to your accommodation with meet & greet service"
    },
    {
      icon: Mountain,
      title: "Mountain Climbing",
      description: "Expert-guided treks to Kilimanjaro summit with safety equipment and experienced porters"
    }
  ];

  const whyChooseUs = [
    {
      icon: Users,
      title: "Local Experts",
      description: "Born and raised in Tanzania, our guides know every secret spot and wildlife behavior"
    },
    {
      icon: Star,
      title: "Tailor-made Itineraries",
      description: "Every safari is customized to your interests, budget, and travel preferences"
    },
    {
      icon: Shield,
      title: "Affordable Packages",
      description: "Best value for money with transparent pricing and no hidden costs"
    },
    {
      icon: Clock,
      title: "24/7 Customer Support",
      description: "Round-the-clock assistance before, during, and after your Tanzanian adventure"
    }
  ];

  const testimonials = [
    {
      name: "Sarah Johnson",
      country: "USA",
      rating: 5,
      text: "Absolutely incredible experience! The guides were knowledgeable and we saw all the Big Five. Serengeti Wonders made our dream safari come true!",
      image: "https://images.unsplash.com/photo-1494790108755-2616b612b550?w=150&h=150&fit=crop&crop=face"
    },
    {
      name: "Marcus Weber",
      country: "Germany", 
      rating: 5,
      text: "From Kilimanjaro to Zanzibar, every moment was perfectly organized. The cultural tour with Maasai community was the highlight of our trip!",
      image: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face"
    },
    {
      name: "Emma Thompson",
      country: "UK",
      rating: 5,
      text: "Best safari company in Tanzania! Professional, friendly, and they really care about conservation. We'll definitely be back with our family!",
      image: "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop&crop=face"
    }
  ];

  return (
    <div className="min-h-screen bg-background font-inter">
      {/* Navigation */}
      <nav className="fixed top-0 w-full z-50 bg-background/80 backdrop-blur-md border-b border-border/50">
        <div className="container mx-auto px-6 py-4">
          <div className="flex items-center justify-between">
            <motion.div 
              initial={{ opacity: 0, x: -20 }}
              animate={{ opacity: 1, x: 0 }}
              className="text-2xl font-playfair font-bold text-primary"
            >
              Serengeti Wonders Tours
            </motion.div>
            
            {/* Desktop Menu */}
            <div className="hidden md:flex items-center space-x-8">
              {["Home", "Destinations", "Services", "About", "Contact"].map((item) => (
                <a 
                  key={item}
                  href={`#${item.toLowerCase()}`}
                  className="text-foreground hover:text-primary transition-colors duration-300 font-medium"
                >
                  {item}
                </a>
              ))}
              <Button className="safari-button">
                Book Now <ArrowRight className="ml-2 w-4 h-4" />
              </Button>
            </div>

            {/* Mobile Menu Button */}
            <button 
              className="md:hidden text-foreground"
              onClick={() => setIsMenuOpen(!isMenuOpen)}
            >
              {isMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
            </button>
          </div>

          {/* Mobile Menu */}
          {isMenuOpen && (
            <motion.div 
              initial={{ opacity: 0, y: -20 }}
              animate={{ opacity: 1, y: 0 }}
              className="md:hidden mt-4 pb-4 space-y-4"
            >
              {["Home", "Destinations", "Services", "About", "Contact"].map((item) => (
                <a 
                  key={item}
                  href={`#${item.toLowerCase()}`}
                  className="block text-foreground hover:text-primary transition-colors duration-300 font-medium"
                  onClick={() => setIsMenuOpen(false)}
                >
                  {item}
                </a>
              ))}
              <Button className="safari-button w-full">
                Book Now <ArrowRight className="ml-2 w-4 h-4" />
              </Button>
            </motion.div>
          )}
        </div>
      </nav>

      {/* Hero Section */}
      <section ref={heroRef} id="home" className="relative h-screen overflow-hidden">
        <div 
          className="absolute inset-0 bg-cover bg-center bg-no-repeat"
          style={{ 
            backgroundImage: `url(${heroSafari})`,
            transform: `translateY(${scrollY * 0.5}px)`
          }}
        />
        <div className="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent" />
        
        <div className="relative z-10 h-full flex items-center">
          <div className="container mx-auto px-6">
            <motion.div 
              initial={{ opacity: 0, y: 50 }}
              animate={heroInView ? { opacity: 1, y: 0 } : {}}
              transition={{ duration: 0.8 }}
              className="max-w-3xl"
            >
              <h1 className="text-5xl md:text-7xl font-playfair font-bold text-white mb-6 safari-text-glow">
                Explore Tanzania with Us
              </h1>
              <p className="text-xl md:text-2xl text-white/90 mb-8 leading-relaxed">
                Safaris, Mountains, Beaches & Culture - Experience the magic of Tanzania with authentic local expertise
              </p>
              <div className="flex flex-col sm:flex-row gap-4">
                <Button size="lg" className="safari-button text-lg px-8 py-6">
                  Book Your Safari <ArrowRight className="ml-2 w-5 h-5" />
                </Button>
                <Button 
                  size="lg" 
                  variant="outline" 
                  className="text-white border-white hover:bg-white hover:text-primary text-lg px-8 py-6"
                >
                  Watch Our Story
                </Button>
              </div>
            </motion.div>
          </div>
        </div>

        {/* Floating Elements */}
        <motion.div 
          animate={{ y: [0, -20, 0] }}
          transition={{ duration: 4, repeat: Infinity }}
          className="absolute bottom-10 left-1/2 transform -translate-x-1/2 text-white"
        >
          <div className="w-6 h-10 border-2 border-white rounded-full flex justify-center">
            <div className="w-1 h-3 bg-white rounded-full mt-2 animate-pulse" />
          </div>
        </motion.div>
      </section>

      {/* About Section */}
      <section ref={aboutRef} id="about" className="py-20 bg-gradient-to-b from-background to-muted/30">
        <div className="container mx-auto px-6">
          <motion.div
            initial={{ opacity: 0, y: 50 }}
            animate={aboutInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.6 }}
            className="text-center mb-16"
          >
            <h2 className="text-4xl md:text-5xl font-playfair font-bold text-foreground mb-6">
              About Serengeti Wonders Tours
            </h2>
            <p className="text-lg text-muted-foreground max-w-3xl mx-auto leading-relaxed">
              Born from our deep love for Tanzania's incredible wildlife and rich culture, we are your local experts 
              in creating unforgettable African adventures. With over 15 years of experience, we pride ourselves on 
              sustainable tourism that benefits local communities while giving you the authentic Tanzania experience.
            </p>
          </motion.div>

          <div className="grid md:grid-cols-2 gap-12 items-center">
            <motion.div
              initial={{ opacity: 0, x: -50 }}
              animate={aboutInView ? { opacity: 1, x: 0 } : {}}
              transition={{ duration: 0.6, delay: 0.2 }}
            >
              <div className="grid grid-cols-2 gap-4">
                <img 
                  src={maasaiCulture} 
                  alt="Maasai Culture" 
                  className="rounded-xl shadow-warm w-full h-48 object-cover"
                />
                <img 
                  src={zanzibarBeach} 
                  alt="Zanzibar Beach" 
                  className="rounded-xl shadow-warm w-full h-48 object-cover mt-8"
                />
                <img 
                  src={serengetiMigration} 
                  alt="Serengeti Wildlife" 
                  className="rounded-xl shadow-warm w-full h-48 object-cover -mt-4"
                />
                <img 
                  src={kilimanjaroPeak} 
                  alt="Kilimanjaro" 
                  className="rounded-xl shadow-warm w-full h-48 object-cover mt-4"
                />
              </div>
            </motion.div>

            <motion.div
              initial={{ opacity: 0, x: 50 }}
              animate={aboutInView ? { opacity: 1, x: 0 } : {}}
              transition={{ duration: 0.6, delay: 0.4 }}
              className="space-y-6"
            >
              <div className="flex items-start space-x-4">
                <Award className="w-8 h-8 text-primary mt-1 flex-shrink-0" />
                <div>
                  <h3 className="text-xl font-semibold text-foreground mb-2">Award-Winning Service</h3>
                  <p className="text-muted-foreground">Recognized by TripAdvisor and Safari Awards for exceptional service and sustainable practices.</p>
                </div>
              </div>
              
              <div className="flex items-start space-x-4">
                <Users className="w-8 h-8 text-primary mt-1 flex-shrink-0" />
                <div>
                  <h3 className="text-xl font-semibold text-foreground mb-2">Local Community Support</h3>
                  <p className="text-muted-foreground">Every tour contributes to local communities, schools, and conservation efforts across Tanzania.</p>
                </div>
              </div>
              
              <div className="flex items-start space-x-4">
                <Shield className="w-8 h-8 text-primary mt-1 flex-shrink-0" />
                <div>
                  <h3 className="text-xl font-semibold text-foreground mb-2">Safety First</h3>
                  <p className="text-muted-foreground">Fully licensed, insured, and committed to the highest safety standards for all our adventures.</p>
                </div>
              </div>
            </motion.div>
          </div>
        </div>
      </section>

      {/* Destinations Section */}
      <section ref={destinationsRef} id="destinations" className="py-20 bg-background">
        <div className="container mx-auto px-6">
          <motion.div
            initial={{ opacity: 0, y: 50 }}
            animate={destinationsInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.6 }}
            className="text-center mb-16"
          >
            <h2 className="text-4xl md:text-5xl font-playfair font-bold text-foreground mb-6">
              Top Destinations
            </h2>
            <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
              Discover Tanzania's most spectacular destinations, each offering unique experiences and unforgettable memories
            </p>
          </motion.div>

          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {destinations.map((destination, index) => (
              <motion.div
                key={destination.name}
                initial={{ opacity: 0, y: 50 }}
                animate={destinationsInView ? { opacity: 1, y: 0 } : {}}
                transition={{ duration: 0.6, delay: index * 0.1 }}
              >
                <Card className="safari-card group cursor-pointer h-full">
                  <div className="relative overflow-hidden rounded-t-xl">
                    <img 
                      src={destination.image}
                      alt={destination.name}
                      className="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500"
                    />
                    <div className="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent" />
                    <div className="absolute bottom-4 left-4 text-white">
                      <h3 className="text-xl font-bold">{destination.name}</h3>
                    </div>
                  </div>
                  <CardContent className="p-6">
                    <p className="text-muted-foreground mb-4">{destination.description}</p>
                    <div className="space-y-2">
                      {destination.highlights.map((highlight) => (
                        <div key={highlight} className="flex items-center space-x-2">
                          <CheckCircle className="w-4 h-4 text-primary" />
                          <span className="text-sm text-foreground">{highlight}</span>
                        </div>
                      ))}
                    </div>
                  </CardContent>
                </Card>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Services Section */}
      <section ref={servicesRef} id="services" className="py-20 bg-gradient-to-b from-muted/30 to-background">
        <div className="container mx-auto px-6">
          <motion.div
            initial={{ opacity: 0, y: 50 }}
            animate={servicesInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.6 }}
            className="text-center mb-16"
          >
            <h2 className="text-4xl md:text-5xl font-playfair font-bold text-foreground mb-6">
              Our Services
            </h2>
            <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
              Comprehensive safari and travel services designed to make your Tanzanian adventure seamless and memorable
            </p>
          </motion.div>

          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {services.map((service, index) => (
              <motion.div
                key={service.title}
                initial={{ opacity: 0, y: 50 }}
                animate={servicesInView ? { opacity: 1, y: 0 } : {}}
                transition={{ duration: 0.6, delay: index * 0.1 }}
              >
                <Card className="safari-card text-center h-full group">
                  <CardContent className="p-8">
                    <div className="w-16 h-16 bg-gradient-sunset rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                      <service.icon className="w-8 h-8 text-white" />
                    </div>
                    <h3 className="text-xl font-semibold text-foreground mb-4">{service.title}</h3>
                    <p className="text-muted-foreground">{service.description}</p>
                  </CardContent>
                </Card>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Why Choose Us Section */}
      <section ref={whyChooseRef} className="py-20 bg-gradient-sunset text-white">
        <div className="container mx-auto px-6">
          <motion.div
            initial={{ opacity: 0, y: 50 }}
            animate={whyChooseInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.6 }}
            className="text-center mb-16"
          >
            <h2 className="text-4xl md:text-5xl font-playfair font-bold mb-6">
              Why Choose Serengeti Wonders?
            </h2>
            <p className="text-lg text-white/90 max-w-2xl mx-auto">
              Experience the difference of traveling with Tanzania's most trusted safari experts
            </p>
          </motion.div>

          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {whyChooseUs.map((item, index) => (
              <motion.div
                key={item.title}
                initial={{ opacity: 0, y: 50 }}
                animate={whyChooseInView ? { opacity: 1, y: 0 } : {}}
                transition={{ duration: 0.6, delay: index * 0.1 }}
                className="text-center group"
              >
                <div className="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-white/30 transition-colors duration-300">
                  <item.icon className="w-10 h-10 text-white" />
                </div>
                <h3 className="text-xl font-semibold mb-4">{item.title}</h3>
                <p className="text-white/80">{item.description}</p>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Testimonials Section */}
      <section ref={testimonialsRef} className="py-20 bg-background">
        <div className="container mx-auto px-6">
          <motion.div
            initial={{ opacity: 0, y: 50 }}
            animate={testimonialsInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.6 }}
            className="text-center mb-16"
          >
            <h2 className="text-4xl md:text-5xl font-playfair font-bold text-foreground mb-6">
              What Our Guests Say
            </h2>
            <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
              Real stories from travelers who experienced the magic of Tanzania with us
            </p>
          </motion.div>

          <div className="grid md:grid-cols-3 gap-8">
            {testimonials.map((testimonial, index) => (
              <motion.div
                key={testimonial.name}
                initial={{ opacity: 0, y: 50 }}
                animate={testimonialsInView ? { opacity: 1, y: 0 } : {}}
                transition={{ duration: 0.6, delay: index * 0.1 }}
              >
                <Card className="safari-card h-full">
                  <CardContent className="p-8">
                    <div className="flex items-center mb-6">
                      <img 
                        src={testimonial.image}
                        alt={testimonial.name}
                        className="w-16 h-16 rounded-full object-cover mr-4"
                      />
                      <div>
                        <h4 className="font-semibold text-foreground">{testimonial.name}</h4>
                        <p className="text-muted-foreground text-sm">{testimonial.country}</p>
                        <div className="flex mt-1">
                          {[...Array(testimonial.rating)].map((_, i) => (
                            <Star key={i} className="w-4 h-4 fill-primary text-primary" />
                          ))}
                        </div>
                      </div>
                    </div>
                    <p className="text-muted-foreground italic">"{testimonial.text}"</p>
                  </CardContent>
                </Card>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Contact Section */}
      <section ref={contactRef} id="contact" className="py-20 bg-gradient-to-b from-muted/30 to-background">
        <div className="container mx-auto px-6">
          <motion.div
            initial={{ opacity: 0, y: 50 }}
            animate={contactInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.6 }}
            className="text-center mb-16"
          >
            <h2 className="text-4xl md:text-5xl font-playfair font-bold text-foreground mb-6">
              Start Your Adventure
            </h2>
            <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
              Ready to explore Tanzania? Get in touch with us and let's plan your perfect safari adventure
            </p>
          </motion.div>

          <div className="grid lg:grid-cols-2 gap-12">
            <motion.div
              initial={{ opacity: 0, x: -50 }}
              animate={contactInView ? { opacity: 1, x: 0 } : {}}
              transition={{ duration: 0.6, delay: 0.2 }}
            >
              <Card className="safari-card">
                <CardHeader>
                  <CardTitle className="text-2xl font-playfair">Send us a message</CardTitle>
                  <CardDescription>We'll get back to you within 24 hours</CardDescription>
                </CardHeader>
                <CardContent>
                  <form onSubmit={handleSubmit} className="space-y-6">
                    <div className="grid md:grid-cols-2 gap-4">
                      <div>
                        <label className="text-sm font-medium text-foreground mb-2 block">Full Name</label>
                        <Input placeholder="Your full name" required />
                      </div>
                      <div>
                        <label className="text-sm font-medium text-foreground mb-2 block">Email</label>
                        <Input type="email" placeholder="your@email.com" required />
                      </div>
                    </div>
                    <div>
                      <label className="text-sm font-medium text-foreground mb-2 block">Phone</label>
                      <Input placeholder="+1 (555) 123-4567" />
                    </div>
                    <div>
                      <label className="text-sm font-medium text-foreground mb-2 block">Message</label>
                      <Textarea 
                        placeholder="Tell us about your dream safari..." 
                        rows={6}
                        required
                      />
                    </div>
                    <Button type="submit" className="safari-button w-full">
                      Send Message <Send className="ml-2 w-4 h-4" />
                    </Button>
                  </form>
                </CardContent>
              </Card>
            </motion.div>

            <motion.div
              initial={{ opacity: 0, x: 50 }}
              animate={contactInView ? { opacity: 1, x: 0 } : {}}
              transition={{ duration: 0.6, delay: 0.4 }}
              className="space-y-8"
            >
              <Card className="safari-card">
                <CardContent className="p-8">
                  <h3 className="text-xl font-semibold text-foreground mb-6">Contact Information</h3>
                  <div className="space-y-4">
                    <div className="flex items-center space-x-4">
                      <Phone className="w-6 h-6 text-primary" />
                      <div>
                        <p className="font-medium text-foreground">Phone</p>
                        <p className="text-muted-foreground">+255 754 123 456</p>
                      </div>
                    </div>
                    <div className="flex items-center space-x-4">
                      <Mail className="w-6 h-6 text-primary" />
                      <div>
                        <p className="font-medium text-foreground">Email</p>
                        <p className="text-muted-foreground">info@serengetiwonders.com</p>
                      </div>
                    </div>
                    <div className="flex items-center space-x-4">
                      <MapPin className="w-6 h-6 text-primary" />
                      <div>
                        <p className="font-medium text-foreground">Location</p>
                        <p className="text-muted-foreground">Arusha, Tanzania</p>
                      </div>
                    </div>
                    <div className="flex items-center space-x-4">
                      <MessageCircle className="w-6 h-6 text-primary" />
                      <div>
                        <p className="font-medium text-foreground">WhatsApp</p>
                        <p className="text-muted-foreground">+255 754 123 456</p>
                      </div>
                    </div>
                  </div>
                </CardContent>
              </Card>

              <Card className="safari-card">
                <CardContent className="p-8">
                  <h3 className="text-xl font-semibold text-foreground mb-6">Office Hours</h3>
                  <div className="space-y-2">
                    <div className="flex justify-between">
                      <span className="text-muted-foreground">Monday - Friday</span>
                      <span className="text-foreground font-medium">8:00 AM - 6:00 PM</span>
                    </div>
                    <div className="flex justify-between">
                      <span className="text-muted-foreground">Saturday</span>
                      <span className="text-foreground font-medium">9:00 AM - 4:00 PM</span>
                    </div>
                    <div className="flex justify-between">
                      <span className="text-muted-foreground">Sunday</span>
                      <span className="text-foreground font-medium">Emergency Only</span>
                    </div>
                  </div>
                </CardContent>
              </Card>

              {/* Quick Action Buttons */}
              <div className="grid grid-cols-2 gap-4">
                <Button className="safari-button h-16">
                  <MessageCircle className="w-6 h-6 mr-2" />
                  WhatsApp
                </Button>
                <Button variant="outline" className="h-16 border-primary text-primary hover:bg-primary hover:text-primary-foreground">
                  <Phone className="w-6 h-6 mr-2" />
                  Call Now
                </Button>
              </div>
            </motion.div>
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="bg-safari-brown text-white py-16">
        <div className="container mx-auto px-6">
          <div className="grid md:grid-cols-4 gap-8 mb-8">
            <div>
              <h3 className="text-2xl font-playfair font-bold mb-4">Serengeti Wonders Tours</h3>
              <p className="text-white/80 mb-4">
                Your trusted partner for authentic Tanzanian adventures since 2008.
              </p>
              <div className="flex space-x-4">
                <Button size="sm" variant="ghost" className="text-white hover:text-primary hover:bg-white/10 p-2">
                  <Facebook className="w-5 h-5" />
                </Button>
                <Button size="sm" variant="ghost" className="text-white hover:text-primary hover:bg-white/10 p-2">
                  <Instagram className="w-5 h-5" />
                </Button>
                <Button size="sm" variant="ghost" className="text-white hover:text-primary hover:bg-white/10 p-2">
                  <Youtube className="w-5 h-5" />
                </Button>
                <Button size="sm" variant="ghost" className="text-white hover:text-primary hover:bg-white/10 p-2">
                  <MessageCircle className="w-5 h-5" />
                </Button>
              </div>
            </div>
            
            <div>
              <h4 className="text-lg font-semibold mb-4">Quick Links</h4>
              <ul className="space-y-2">
                {["Home", "About", "Safaris", "Destinations", "Contact"].map((link) => (
                  <li key={link}>
                    <a href={`#${link.toLowerCase()}`} className="text-white/80 hover:text-primary transition-colors">
                      {link}
                    </a>
                  </li>
                ))}
              </ul>
            </div>
            
            <div>
              <h4 className="text-lg font-semibold mb-4">Safari Packages</h4>
              <ul className="space-y-2">
                {["Budget Safaris", "Luxury Safaris", "Family Safaris", "Honeymoon Packages", "Cultural Tours"].map((package_) => (
                  <li key={package_}>
                    <a href="#" className="text-white/80 hover:text-primary transition-colors">
                      {package_}
                    </a>
                  </li>
                ))}
              </ul>
            </div>
            
            <div>
              <h4 className="text-lg font-semibold mb-4">Newsletter</h4>
              <p className="text-white/80 mb-4">Subscribe for safari tips and exclusive offers</p>
              <div className="flex">
                <Input 
                  placeholder="Your email" 
                  className="bg-white/10 border-white/20 text-white placeholder:text-white/60"
                />
                <Button className="ml-2 bg-primary hover:bg-primary-glow">
                  <Send className="w-4 h-4" />
                </Button>
              </div>
            </div>
          </div>
          
          <div className="border-t border-white/20 pt-8 text-center">
            <p className="text-white/80">
              © 2024 Serengeti Wonders Tours. All rights reserved. | Licensed Safari Tour Operator
            </p>
          </div>
        </div>
      </footer>
    </div>
  );
};

export default Index;
