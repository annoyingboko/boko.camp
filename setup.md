---
layout: about
title: Setup
show_title: false
permalink: /setup
---

<style>
  .card__title-img {
    width: 2rem;
    height: 2rem;
    margin-bottom: 3.5px;
    margin-right: 0.2rem;
  }
</style>

# My Setup

On this here page, you can find listed all the different software, hardware, or anything in-between I use for various works.

> If anything isn't listed here feel free to [get in contact]({%- link contact.md -%}) and I'll add it!

<div>
  {%- for _setup in site.data.setup.setups -%}
    <h3>{{ _setup.title }}</h3>
    <p>{{ _setup.desc }}</p>

    <div class="grid grid--p-3">
      {%- for _item in _setup.items -%}

        {%- if _item.cardsize -%}
          {%- assign _size = _item.cardsize -%}
        {%- else -%}
          {%- assign _size = 'auto' -%}
        {%- endif -%}

        <div class="cell cell--12 cell--lg-{{ _size }}">
          <div class="card" style="background: #{{ _item.colour }};">
            <div class="card__content">

              <div class="card__header">
                <h4>
                  <a href="{{ _item.url }}">
                    <img class="image card__title-img" src="{{ _item.image }}"/>
                    {{ _item.name }}
                  </a>
                </h4>
              </div>

              <p>
                {{ _item.desc }}
              </p>

            </div>
          </div>
        </div>

      {%- endfor -%}
    </div>

  {%- endfor -%}
</div>
