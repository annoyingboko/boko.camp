---
layout: about
title: About
show_title: false
permalink: /about
excerpt: Hi I'm Boko, and I love procrastinating. Welcome to the place where I put stuff when I actually don't do that for once.
---

{%- assign _byear = "July 14, 2002" | date: "%s" -%}
{%- assign _nyear = "now" | date: "%s" -%}
{%- assign _years = _nyear | minus: _byear | date: "%y" -%}
{%- assign _start = 0 | date: "%y" -%}
{%- assign _age = _years | minus: _start -%}

# About

Hi I'm Boko, and I love procrastinating.  
<i>Welcome to the place where I put stuff when I actually don't do that for once.</i>

I'm into all things technology, mainly games, and upload videos to [YouTube](channel), as well as stream on [Twitch](live).

### Q & A

##### A bit about you?
- He/him, Bi, {{_age}} Years Old, from Northern England
- My favourite colour is either Green or Purple I can never decide lmao
- Currently studying BEng/BSc in Computer Science

##### What games do you play?
- I enjoy anything so long as it's good (my opinion is factual)
- My favourite game of all time was Horizon Zero Dawn, and now is Horizon Forbidden West
- Some of my other favourites are Genshin Impact, Zelda, Xenoblade, ~~Among Us~~, Hollow Knight, Persona 5, Octopath Traveller and Astral Chain

##### What are your hobbies?
- Honestly anything involving computers, but some of my favourites include:
  - Programming
  - Gaming
  - Video Editing
  - Digital Art / Graphic Design

##### What languages do you use?
- Python, Java and a bit of C#
- Learning Haskell
- Bri'ish and Bad Spanish

##### What software / hardware / setup do you use?
- See my [setup page]({%- link setup.md -%}) for full details!

### Reviews

See what people have to say about me!

<div>
  <div class="grid grid--p-3">
    {%- for _item in site.data.reviews -%}

      {%- if _item.cardsize -%}
        {%- assign _size = _item.cardsize -%}
      {%- else -%}
        {%- assign _size = 6 -%}
      {%- endif -%}

      <div class="cell cell--12 cell--lg-{{_size}}">
        <div class="card" style="background: #0006;">
          <div class="card__content">

            <p>
              "{{ _item.content }}"
            </p>
            <p style="text-align: right;">
              <i><b>- {{ _item.author }}</b></i>
            </p>

          </div>
        </div>
      </div>

    {%- endfor -%}
  </div>
</div>
