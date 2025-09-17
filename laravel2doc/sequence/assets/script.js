
document.addEventListener('DOMContentLoaded', function() {
  // Initialize Mermaid
  mermaid.initialize({
    startOnLoad: true,
    theme: localStorage.getItem('diagramTheme') || 'default',
    securityLevel: 'loose',
    flowchart: { curve: 'basis' },
    sequence: { 
      mirrorActors: false,
      showSequenceNumbers: true,
      actorMargin: 80,
      boxMargin: 10,
      noteMargin: 10,
      messageMargin: 35,
      messageAlign: 'center'
    }
  });
  
  // Theme toggle functionality
  const themeToggle = document.getElementById('theme-toggle');
  if (themeToggle) {
    themeToggle.addEventListener('click', function() {
      if (document.body.classList.contains('dark-mode')) {
        document.body.classList.remove('dark-mode');
        localStorage.setItem('theme', 'light');
        themeToggle.innerHTML = '🌙';
      } else {
        document.body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
        themeToggle.innerHTML = '☀️';
      }
    });
    
    // Set initial theme based on localStorage or system preference
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.body.classList.add('dark-mode');
      themeToggle.innerHTML = '☀️';
    } else {
      document.body.classList.remove('dark-mode');
      themeToggle.innerHTML = '🌙';
    }
  }
  
  // Tab functionality
  const tabs = document.querySelectorAll('.tab');
  tabs.forEach(tab => {
    tab.addEventListener('click', function() {
      // Remove active class from all tabs and tab contents
      document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
      document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
      
      // Add active class to clicked tab and corresponding content
      this.classList.add('active');
      const tabId = this.getAttribute('data-tab');
      document.getElementById(tabId).classList.add('active');
      
      // Save active tab to localStorage
      localStorage.setItem('activeTab', tabId);
    });
  });
  
  // Set active tab based on localStorage or default to first tab
  const savedTab = localStorage.getItem('activeTab');
  if (savedTab && document.getElementById(savedTab)) {
    document.querySelector(`[data-tab="${savedTab}"]`).click();
  } else if (tabs.length > 0) {
    tabs[0].click();
  }
  
  // Search functionality
  const searchInput = document.getElementById('search-diagrams');
  if (searchInput) {
    searchInput.addEventListener('input', function() {
      const searchTerm = this.value.toLowerCase();
      const diagramCards = document.querySelectorAll('.diagram-card');
      
      diagramCards.forEach(card => {
        const title = card.querySelector('.diagram-title').textContent.toLowerCase();
        const description = card.querySelector('.diagram-description').textContent.toLowerCase();
        const controller = card.getAttribute('data-controller').toLowerCase();
        const method = card.getAttribute('data-method').toLowerCase();
        
        if (title.includes(searchTerm) || description.includes(searchTerm) || 
            controller.includes(searchTerm) || method.includes(searchTerm)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  }
  
  // Filter by type functionality
  const typeFilter = document.getElementById('filter-type');
  if (typeFilter) {
    typeFilter.addEventListener('change', function() {
      const selectedType = this.value;
      const diagramCards = document.querySelectorAll('.diagram-card');
      
      diagramCards.forEach(card => {
        if (selectedType === 'all' || card.getAttribute('data-type') === selectedType) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  }
  
  // Filter by controller functionality
  const controllerFilter = document.getElementById('filter-controller');
  if (controllerFilter) {
    controllerFilter.addEventListener('change', function() {
      const selectedController = this.value;
      const diagramCards = document.querySelectorAll('.diagram-card');
      
      diagramCards.forEach(card => {
        if (selectedController === 'all' || card.getAttribute('data-controller') === selectedController) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  }
  
  // Print functionality
  const printBtn = document.getElementById('print-btn');
  if (printBtn) {
    printBtn.addEventListener('click', function() {
      window.print();
    });
  }
  
  // Export functionality
  const exportBtn = document.getElementById('export-btn');
  if (exportBtn) {
    exportBtn.addEventListener('click', function() {
      const diagramId = this.getAttribute('data-diagram');
      const diagramSvg = document.querySelector('.mermaid svg');
      
      if (diagramSvg) {
        // Create a canvas element
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        
        // Set canvas dimensions
        canvas.width = diagramSvg.width.baseVal.value;
        canvas.height = diagramSvg.height.baseVal.value;
        
        // Create image from SVG
        const img = new Image();
        const svgData = new XMLSerializer().serializeToString(diagramSvg);
        img.src = 'data:image/svg+xml;base64,' + btoa(svgData);
        
        img.onload = function() {
          // Draw image to canvas
          ctx.fillStyle = 'white';
          ctx.fillRect(0, 0, canvas.width, canvas.height);
          ctx.drawImage(img, 0, 0);
          
          // Export as PNG
          const pngData = canvas.toDataURL('image/png');
          
          // Create download link
          const downloadLink = document.createElement('a');
          downloadLink.href = pngData;
          downloadLink.download = diagramId + '.png';
          document.body.appendChild(downloadLink);
          downloadLink.click();
          document.body.removeChild(downloadLink);
        };
      }
    });
  }
  
  // Diagram theme switcher
  const diagramThemeSelect = document.getElementById('diagram-theme');
  if (diagramThemeSelect) {
    diagramThemeSelect.value = localStorage.getItem('diagramTheme') || 'default';
    
    diagramThemeSelect.addEventListener('change', function() {
      const theme = this.value;
      localStorage.setItem('diagramTheme', theme);
      
      // Reload page to apply new theme
      window.location.reload();
    });
  }
  
  // Show/hide notes
  const toggleNotes = document.getElementById('toggle-notes');
  if (toggleNotes) {
    toggleNotes.addEventListener('click', function() {
      const notes = document.querySelectorAll('.note');
      notes.forEach(note => {
        note.style.display = note.style.display === 'none' ? 'block' : 'none';
      });
      this.textContent = this.textContent.includes('Hide') ? 'Show Notes' : 'Hide Notes';
    });
  }
  
  // Animation controls
  const toggleAnimation = document.getElementById('toggle-animation');
  if (toggleAnimation) {
    toggleAnimation.addEventListener('click', function() {
      const messages = document.querySelectorAll('.messageLine0, .messageLine1');
      if (this.textContent.includes('Enable')) {
        messages.forEach(message => {
          message.style.animation = 'drawLine 1.5s linear forwards';
          message.style.strokeDasharray = '1000';
          message.style.strokeDashoffset = '1000';
        });
        this.textContent = 'Disable Animation';
      } else {
        messages.forEach(message => {
          message.style.animation = 'none';
          message.style.strokeDasharray = '0';
          message.style.strokeDashoffset = '0';
        });
        this.textContent = 'Enable Animation';
      }
    });
  }
  
  // Copy diagram as text
  const copyTextBtn = document.getElementById('copy-text');
  if (copyTextBtn) {
    copyTextBtn.addEventListener('click', function() {
      const diagramContent = document.getElementById('diagram-source-code');
      if (diagramContent) {
        navigator.clipboard.writeText(diagramContent.textContent)
          .then(() => {
            const originalText = copyTextBtn.textContent;
            copyTextBtn.textContent = 'Copied!';
            setTimeout(() => {
              copyTextBtn.textContent = originalText;
            }, 2000);
          })
          .catch(err => {
            console.error('Failed to copy text: ', err);
          });
      }
    });
  }
  
  // Statistics chart
  const statsChart = document.getElementById('stats-chart');
  if (statsChart && window.Chart) {
    const statsData = JSON.parse(statsChart.getAttribute('data-stats'));
    
    new Chart(statsChart, {
      type: 'bar',
      data: {
        labels: Object.keys(statsData.byType),
        datasets: [{
          label: 'Diagrams by Type',
          data: Object.values(statsData.byType),
          backgroundColor: [
            '#3490dc', '#38c172', '#e3342f', '#f6993f', '#6574cd', '#9561e2'
          ]
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              precision: 0
            }
          }
        }
      }
    });
  }
  
  // Controller distribution chart
  const controllerChart = document.getElementById('controller-chart');
  if (controllerChart && window.Chart) {
    const controllerData = JSON.parse(controllerChart.getAttribute('data-stats'));
    
    new Chart(controllerChart, {
      type: 'doughnut',
      data: {
        labels: Object.keys(controllerData.byController),
        datasets: [{
          data: Object.values(controllerData.byController),
          backgroundColor: [
            '#3490dc', '#38c172', '#e3342f', '#f6993f', '#6574cd', '#9561e2',
            '#f66d9b', '#ffed4a', '#4dc0b5', '#9561e2', '#f6993f', '#e3342f'
          ]
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'right'
          }
        }
      }
    });
  }
});
  