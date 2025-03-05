'use client';

// Selectコンポーネントのプロパティの型定義
type SelectProps = {
  options: {
    value: string;
    label: string;
  }[];
  onChange?: (value: string) => void;
  defaultValue?: string;
  className?: string;
};

/**
 * 再利用可能なセレクトコンポーネント
 * @param options - 選択肢の配列（value, labelのペア）
 * @param onChange - 値変更時のコールバック関数
 * @param defaultValue - デフォルト値
 * @param className - 追加のCSSクラス
 */
export default function Select({ options, onChange, defaultValue, className = '' }: SelectProps) {
  // 選択値が変更された時のハンドラー
  const handleChange = (e: React.ChangeEvent<HTMLSelectElement>) => {
    if (onChange) {
      onChange(e.target.value);
    }
  };

  return (
    <select
      className={`border-text-primary/20 focus:ring-primary w-full rounded-md border p-2 ${className}`}
      onChange={handleChange}
      defaultValue={defaultValue}
    >
      {options.map((option) => (
        <option key={option.value} value={option.value}>
          {option.label}
        </option>
      ))}
    </select>
  );
}
