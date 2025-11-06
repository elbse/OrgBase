# OrgBase

> Preserving institutional knowledge across student organization leadership transitions.

**Status:** 🚧 Under Active Development

---

## The Problem

Every year, student organizations face the same crisis:

- New officers spend **40+ hours** figuring out what previous leaders already knew
- Critical information (passwords, contacts, budgets, lessons learned) gets **lost in scattered drives and deleted chats**
- **67% of student clubs** experience significant knowledge loss during transitions
- Graduating leaders leave without properly documenting their work, forcing successors to **start from scratch**

### Real Impact
> *"I had no idea where anything was. The previous president graduated and went MIA."*  
> — Incoming club president

> *"We spent weeks trying to find the catering vendor we used last year because no one wrote it down."*  
> — Club treasurer

---

## Our Solution

**OrgBase** is a handover-first platform designed specifically for student organization transitions:

✅ **Guided Handover Process** - 2-hour structured wizard for outgoing leaders  
✅ **Knowledge Preservation** - Organized repository for documents, contacts, and financial info  
✅ **Historical Context** - "This Time Last Year" timeline to anticipate seasonal tasks  
✅ **Smooth Onboarding** - 30-60-90 day roadmap for incoming officers  
✅ **Mobile-First Design** - Built for how students actually work

**Core Philosophy:** Every feature answers the question: *"What would the next president wish they knew on Day 1?"*

---

## Tech Stack

- **Backend:** Laravel 11 (PHP 8.2+)
- **Frontend:** Blade + Livewire 3 + Tailwind CSS
- **Database:** MySQL 
- **Storage:** Laravel File Storage (S3-compatible)

---

## Quick Start

```bash
# Clone repository
git clone https://github.com/yourusername/orgbase.git
cd orgbase

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate --seed

# Start development
php artisan serve
npm run dev
```

Visit `http://localhost:8000`

---

## Development Status

### ✅ Completed
- [ ] Project architecture design
- [ ] Database schema planning
- [ ] UI/UX specifications

### 🚧 In Progress (MVP - Week 3-8)
- [ ] Authentication & user management
- [ ] Club profile system
- [ ] Handover wizard (7-step process)
- [ ] Document storage & organization
- [ ] Contact directory
- [ ] Dashboard & timeline views

### 📅 Upcoming
- [ ] Email notifications
- [ ] Mobile optimization
- [ ] Performance enhancements
- [ ] User testing with pilot clubs

**Target MVP Launch:** Q1 2025

---

## Contributing

This is a student-led open source project. Contributions welcome!

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add: Amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

---


## Contact

**Project Lead:** Charisse Priego  
**Email:** c.priego.545409@umindanao.edu.ph 
**Issues:** [GitHub Issues](https://github.com/elbse/orgbase/issues)

---

**For students, by students.** Building something that makes campus life better. 🎓
