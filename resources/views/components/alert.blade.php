<div style="padding: 12px; border: 1px solid {{ $type === 'success' ? '#c3e6cb' : '#f5c6cb' }};
 background-color: {{ $type === 'success' ? '#d4edda' : '#f8d7da' }}; 
 color: {{ $type === 'success' ? '#155724' : '#721c24' }}; 
 border-radius: 4px; margin-bottom: 15px;">
    <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
</div>

