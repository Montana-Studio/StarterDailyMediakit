---
title: Home
template: modular
onpage_menu: true
menu: home
body_classes: 'wrapp'
content:
  items: '@self.modular'
  order:
    by: default
    order: asc
    custom:
      - _inicio
      - _content
      - _metric
      - _marcas
      - _specs
      - _requerimientos
      - _contacto
      - _end

form:
  name: Contacto Mediakit StarterDaily
  fields:
    - name: nombre
      label: Nombre
      placeholder: Nombre
      type: text
      validate:
        required: true
    - name: empresa
      label: Empresa
      placeholder: Empresa
      type: text
      validate:
        required: true
    - name: marca
      label: Marca
      placeholder: Marca
      type: text
      validate:
        required: true
    - name: email
      label: Email
      placeholder: Correo Electronico
      type: text
      validate:
        rule: email
        required: true
    - name: telefono
      label: Teléfono
      placeholder: Número telefonico
      type: text
      validate:
        required: true
    - name: pais
      label: País
      type: select
      options:
        option1: País
        option2: Chile
        option3: USA
      validata:
        required: true
  buttons:
        - type: submit
          value: Enviar
  process:
      - email:
          from: "{{ config.plugins.email.from }}"
          to:
            - "{{ config.plugins.email.from }}"
            - "{{ form.value.email }}"
          subject: "[Contacto MediaKit] {{ form.value.name|e }}"
          body: "{% include 'forms/data.html.twig' %}"
      - save:
          fileprefix: feedback-
          dateformat: Ymd-His-u
          extension: txt
          body: "{% include 'forms/data.txt.twig' %}"
      - message: Gracias por tu feedback!
      - display: Gracias
---
